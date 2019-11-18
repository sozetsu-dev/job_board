<!DOCTYPE html>
<html>
<head>
  <title>Contact Entreprise</title>
  <link rel="stylesheet" type="text/css" href="../style/register.css">
</head>
<body>
  <div class="header">
    <h2>Contact</h2>
  </div>
  
  <form method="post">
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Email entreprise</label>
      <input type="email" name="mail1" >
    </div>
    <div class="input-group">
      <label>Email particulier</label>
      <input type="email" name="mail2" >
    </div>
    <div class="input-group">
      <label>Nom Entreprise</label>
      <input type="text" name="entreprise" >
    </div>
    <div class="input-group">
      <label>Annonce</label>
      <input type="text" name="annonce" >
    </div>
    <div class="input-group">
    <label for="ameliorer" class="texte3">Votre message : </label><br/>
    <textarea name="message" id="message" row="200" clols="150"></textarea>
  </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_contact">Envoyer</button>
    </div>
  </form>
<?php
// connect to the database
$db = new PDO ("mysql:host=localhost;dbname=job_board", "root", "");

// REGISTER USER
if (isset($_POST['reg_contact'])) {
  // receive all input values from the form
  $username = $_POST['username'];
  $mail1 = $_POST['mail1'];
  $mail2 = $_POST['mail2'];
  $entreprise = $_POST['entreprise'];
  $annonce = $_POST['annonce'];
  $message = $_POST['message'];

  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO form (user, mail1, mail2, entreprise, annonce, message) VALUES('$username', '$mail1', '$mail2', '$entreprise', '$annonce', '$message')";
    $query = $db->exec($query);
    print_r($db->errorInfo());
    //$_SESSION['success'] = "You are now logged in";
    header('location: ../index.php');
  }
}
?>