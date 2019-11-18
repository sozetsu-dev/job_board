<!DOCTYPE html>
<html>
<head>
  <title>Espace Membre +</title>
  <link rel="stylesheet" type="text/css" href="../style/register.css">
</head>
<body>
  <div class="header">
    <h2>Poster une Annonce</h2>
  </div>
  
  <form method="post">
    <div class="input-group">
      <label>Nom Entreprise</label>
      <input type="text" name="nom" >
    </div>
    <div class="input-group">
      <label>Type d'emploie (stage / CDI / CDD)</label>
      <input type="text" name="emploie">
    </div>
    <div class="input-group">
      <label>Secteur d'activité</label>
      <input type="text" name="secteur">
    </div>
    <div class="input-group">
      <label>Salaire</label>
      <input type="text" name="salaire">
    </div>
    <div class="input-group">
      <label>Durée</label>
      <input type="date" name="datee">
    </div>
    <div class="input-group">
      <label>Lieu</label>
      <input type="text" name="lieu">
    </div>
    <div class="input-group">
      <label>Expérience demandée</label>
      <input type="text" name="exp" >
    </div>
    <div class="input-group">
      <label>Compétences demandés</label>
      <input type="text" name="skill" >
    </div>
    <div class="input-group">
    <label for="ameliorer" class="texte3">Annonce : </label><br/>
    <textarea name="mess" id="message" row="200" clols="150"></textarea>
  </div>
    <div class="input-group">
      <button type="submit" class="btn" name="post">Poster</button>
    </div>
</form>
</body>
</html>

<?php
// connect to the database
try {
  $db = new PDO ("mysql:host=localhost;dbname=job_board", "root", "");
}
catch(Exception $e) {
  die('Erreur: ' .$e->getMessage());
}

if (isset($_POST['post'])) {
  $nom = $_POST['nom'];
  $emploie = $_POST['emploie'];
  $secteur = $_POST['secteur'];
  $salaire = $_POST['salaire'];
  $datee = $_POST['datee'];
  $lieu = $_POST['lieu'];
  $exp = $_POST['exp'];
  $skill = $_POST['skill'];
  $mess = $_POST['mess'];

   $query = "INSERT INTO annonce (entreprise, emploie, secteur, salaire, duree, lieu, experience, competence, annonce) VALUES('$nom', '$emploie', '$secteur', '$salaire', '$datee', '$lieu', '$exp', '$skill', '$mess')";
    $query = $db->exec($query);
    print_r($db->errorInfo());
    header('location: membre_ent.php');
}
?>