<?php
session_start();
if (!isset($_SESSION['login'])) {
	header ('Location: ./src/membre_ent.php');
	exit();
}
?>

<html>
<head>
<title>Espace membre</title>
</head>

<body>
Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> !<br />
<a href="./src/deconnexion.php">Déconnexion</a>
</body>
</html>