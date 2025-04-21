<?php
class Auth
{
  private PDO $conn;

  private int $sessionTimeout = 30 * 60; // 30 minutes in seconds
  private int $rememberMeTimeout = 30 * 24 * 60 * 60; // 30 days in seconds
  private string $sessionName = "user_session";
  private string $rememberMeName = "remember_me";
  private string $cookiePath = "/admin";

  public function __construct(PDO $conn)
  {
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }

    $this->conn = $conn;
  }

  private function validateSession()
  {
    if (isset($_SESSION[$this->sessionName])) {
      $session = $_SESSION[$this->sessionName];
      $inactive_time = time() - $session["last_activity"];

      if ($inactive_time > $this->sessionTimeout) {
        session_unset();
        session_destroy();

        return false;
      }
      return true;
    }

    return false;
  }

  public function login(string $username, string $password, bool|null $remember = null): bool
  {
    $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    if ($stmt->rowCount() === 0) {
      throw new Exception("Invalid username or password.");
    }

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!password_verify($password, $user["password"])) {
      throw new Exception("Invalid username or password.");
    }

    $_SESSION[$this->sessionName] = [
      "id" => $user["id"],
      "username" => $user["username"],
      "email" => $user["email"],
      "last_activity" => time(),
    ];

    if ($remember) {
      $remember_token = bin2hex(random_bytes(16));

      $stmt = $this->conn->prepare(
        "UPDATE users SET remember_token = :remember_token WHERE id = :id"
      );
      $stmt->bindParam(":remember_token", $remember_token);
      $stmt->bindParam(":id", $user["id"]);
      $stmt->execute();

      setcookie(
        $this->rememberMeName,
        $remember_token,
        time() + $this->rememberMeTimeout,
        $this->cookiePath
      );
    }

    return true;
  }

  public function logout(): void
  {
    session_unset();
    session_destroy();

    if (isset($_COOKIE[$this->rememberMeName])) {
      setcookie($this->rememberMeName, "", time() - 3600, $this->cookiePath);
    }
  }

  public function isLoggedIn(): bool
  {
    if ($this->validateSession()) {
      return true;
    }

    if (isset($_COOKIE[$this->rememberMeName])) {
      $remember_token = $_COOKIE[$this->rememberMeName];

      $stmt = $this->conn->prepare("SELECT * FROM users WHERE remember_token = :remember_token");
      $stmt->bindParam(":remember_token", $remember_token);
      $stmt->execute();

      if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $_SESSION[$this->sessionName] = [
          "id" => $user["id"],
          "username" => $user["username"],
          "email" => $user["email"],
          "last_activity" => time(),
        ];

        return true;
      }
    }

    return false;
  }

  public function getUsername(): ?string
  {
    return $this->isLoggedIn() ? $_SESSION[$this->sessionName]["username"] : null;
  }

  public function getUserId(): ?int
  {
    return $this->isLoggedIn() ? $_SESSION[$this->sessionName]["id"] : null;
  }

  public function getUserEmail(): ?string
  {
    return $this->isLoggedIn() ? $_SESSION[$this->sessionName]["email"] : null;
  }

  public function updateLastActivity(): void
  {
    if ($this->isLoggedIn()) {
      $_SESSION[$this->sessionName]["last_activity"] = time();
    }
  }

  public function createUser(string $username, string $email, string $password)
  {
    $stmt = $this->conn->prepare(
      "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)"
    );

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $hashedPassword);

    if ($stmt->execute()) {
      return true;
    } else {
      throw new Exception("Failed to create user.");
    }
  }
}
