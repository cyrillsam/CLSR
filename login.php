<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Integra</title>

  <!-- favicon
  ============================================ -->
  <link type="image/x-icon" href="img/logo/integra-logo.png" rel="shortcut icon">

  <!-- Google Fonts
  ============================================ -->
  <link type='text/css' href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800'
    rel='stylesheet'>

  <!-- Fontawsome CSS
  ============================================ -->
  <link href="css/fontawesome.min.css" rel="stylesheet">

  <!-- Metarial Iconic Font CSS
  ============================================ -->
  <link href="css/material-design-iconic-font.min.css" rel="stylesheet">

  <!-- Bootstrap CSS
  ============================================ -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Plugins CSS
  ============================================ -->
  <link href="css/plugins.css" rel="stylesheet">

  <!-- Style CSS
  ============================================ -->
  <link href="style.css?<?= time() ?>" rel="stylesheet">

  <!-- Color CSS
  ============================================ -->
  <link href="css/color.css" rel="stylesheet">

  <!-- Responsive CSS
  ============================================ -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- Modernizr JS
  ============================================ -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
  <div class="as-mainwrapper login-content">
    <main>
      <form method="post">
        <div class="logo-wrapper">
          <h1 class="sr-only">Integra Login</h1>
          <?php include "include/logo.php"; ?>
        </div>

        <div class="form-title">
          <h2>Good to see you again!</h2>
          <p>Enter your details to login</p>
        </div>

        <div class="form-group w-100">
          <label for="inputEmail">Email</label>
          <input class="form-control" id="inputEmail" name="email" type="email"
            aria-describedby="emailHelp" placeholder="Enter your email">
        </div>

        <div class="form-group w-100">
          <label for="inputPassword">Password</label>
          <input class="form-control" id="inputPassword" name="password" type="password"
            aria-describedby="passwordHelp" placeholder="••••••••">
        </div>

        <div class="d-flex align-items-center justify-content-between w-100 mb-4">
          <div class="form-check">
            <input class="form-check-input" id="defaultCheck1" type="checkbox" value="">
            <label class="form-check-label" for="defaultCheck1">
              Remember for 30 days
            </label>
          </div>

          <a class="forgot-password" href="forgot-password.php">Forgot Password?</a>
        </div>

        <button class="btn button-default w-100" type="submit">Login</button>

        <div class="form-group w-100 mt-4">
          <p class="text-center">Don't have an account? <a href="register.php">Register</a></p>
        </div>
      </form>

      <div class="login-footer">
        <p class="m-0">Copyright © 2025. All Rights Reserved.</p>
      </div>
    </main>
    <aside class="hero">
      <img src="img/login-hero.png" alt="">
    </aside>
  </div>

  <!-- jquery
  ============================================ -->
  <script src="js/vendor/jquery-1.12.4.min.js"></script>

  <!-- main JS
  ============================================ -->
  <script src="js/main.js"></script>
</body>

</html>
