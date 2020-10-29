<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!---Font Awesome-->
  <script src="https://kit.fontawesome.com/e21174bd33.js" crossorigin="anonymous"></script>
<!---Google Fonts--->
  <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
<!---CSS--->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Login</title>
</head>

<body>

<!--- HEADER --->
  <?php include(ROOT_PATH . "/app/includes/header.inc.php"); ?>
<!--- // HEADER --->

  <div class="auth-content">

    <form action="login.php" method="post">
      <h2 class="form-title">Login</h2>

      <?php include(ROOT_PATH . "/app/helpers/formErrors.php")?>  

      <div>
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>" id="" class="text-input">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $password; ?>" id="" class="text-input">
      </div>
      <div class="form-btn">
        <button type="submit" name="login-btn" class="btn btn-big">Login</button>
      </div>
      <p>or <a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></p>
    </form>

  </div>



  <!-----JQUERY------>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-----CUSTOM SCRIPT ------>
  <script src="assets/js/scripts.js"></script>
</body>
</html>