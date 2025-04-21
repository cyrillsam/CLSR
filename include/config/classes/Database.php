<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "include/config/constants.php";

class Database
{
  private static $instance;

  private string $host = "localhost";
  private int $port = 3306; // Default MySQL port
  private string $charset = "utf8mb4";
  private string $db_name = "integra_db";
  private string $username = "root";
  private string|null $password = "";
  private PDO $conn;
  private Auth $auth;

  private function __construct()
  {
    $this->host = getenv("DB_HOST") ?: $this->host;
    $this->port = getenv("DB_PORT") ?: $this->port;
    $this->charset = getenv("DB_CHARSET") ?: $this->charset;
    $this->db_name = getenv("DB_NAME") ?: $this->db_name;
    $this->username = getenv("DB_USERNAME") ?: $this->username;
    $this->password = getenv("DB_PASSWORD") ?: $this->password;

    try {
      $this->conn = new PDO(
        "mysql:host={$this->host};dbname={$this->db_name};charset={$this->charset}",
        $this->username,
        $this->password
      );
      $this->auth = new Auth($this->conn);
      $this->seedAdminUser();
    } catch (\Throwable $th) {
      echo "Connection failed: " . $th->getMessage();
      exit();
    }
  }

  private function seedAdminUser()
  {
    $username = DEFAULT_ADMIN_USERNAME;

    $q_user = $this->conn->prepare("SELECT 1 FROM `users` WHERE `username` = :username LIMIT 1");
    $q_user->bindParam(":username", $username);
    $q_user->execute();

    if ($q_user->rowCount() > 0) {
      return;
    }

    $this->auth->createUser(DEFAULT_ADMIN_USERNAME, DEFAULT_ADMIN_EMAIL, DEFAULT_ADMIN_PASSWORD);
  }

  public static function getInstance()
  {
    if (!self::$instance) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  public function getConnection()
  {
    return $this->conn;
  }

  public function auth()
  {
    return $this->auth;
  }
}
