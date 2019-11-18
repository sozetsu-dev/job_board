<!DOCTYPE html>
<html>
<head>
  <title>Inscription Entreprise</title>
  <link rel="stylesheet" type="text/css" href="../style/register.css">
</head>
<body>
  <div class="header">
    <h2>Inscription</h2>
  </div>
  
  <form method="post">
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="./src/login.php">Sign in</a>
    </p>
  </form>
<?php

// connect to the database
$db = new PDO ("mysql:host=localhost;dbname=job_board", "root", "");

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];

  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO user_ent (username, email, password, confirme) VALUES('$username', '$email', '$password_1', '$password_2')";
    $query = $db->exec($query);
    print_r($db->errorInfo());
    //$_SESSION['success'] = "You are now logged in";
    header('location: ../index.php');
  }
}
?>
</body>
</html>