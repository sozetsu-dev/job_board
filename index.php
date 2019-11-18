<?php
// connect to the database
$db = new PDO ("mysql:host=localhost;dbname=job_board", "root", "");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="./style/style.css">
	<title>Job Search - Home</title>
</head>
<div id="primary">
	<body>
		<nav>
			<ul>
				<li><a href="#home">Accueil</a></li>
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">Inscription</a>
					<div class="dropdown-content">
						<a href="./src/register_ent.php">Inscription Entreprise</a>
						<a href="./src/register.php">Inscription Particulier</a>
					</div>
				</li>
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">contact</a>
					<div class="dropdown-content">
						<a href="./src/contact.php">Contact Entreprise</a>
					</div>
				</li>
				<li class="tooltip" style="float:right"><a href="./src/login_ent.php">? entreprise</a></li>
				<li class="tooltip" style="float:right"><a href="./src/login.php">? particulier</a></li>
			</ul>
		</nav>
   	 <img class="responsive-img" src="./image/header.png" width="100%"></img>
   	 <section>
   	 <?php
		// connect to the database
		$db = new PDO ("mysql:host=localhost;dbname=job_board", "root", "");
	?>
   	<?php
   		$requete = $db->query('SELECT * FROM annonce');
   		while ($recup = $requete->fetch())
   		{
   	?>
		<article class="article2 border"><img class="responsive-img" src="./image/annonce.jpg" width="100%"></img>
			<h3><?php echo $recup['emploie'];?></h3>
			<p><?php echo $recup['entreprise'];?> (<?php echo $recup['lieu'];?>)<br>
			<?php echo $recup['secteur'];?><br>
			<?php echo $recup['duree'];?></p>
			<!--<button onclick="LearnMore(<?php echo $recup['id']?>)" id="button_learn<?php echo $recup['id']?>">Read more</button>
			<br><br>-->
			<div id="div_learn<?php echo $recup['id']?>" style="display: none">
			<?php echo $recup['annonce'];?><br>
			<?php echo $recup['experience'];?><br>
			<?php echo $recup['competence'];?><br>
			<?php echo $recup['salaire'];?>
			</div>
			<br>
			<button onclick="LearnMore(<?php echo $recup['id']?>)" id="button_learn<?php echo $recup['id']?>">Read more</button>
			<hr>
			<p><a class="hover" href="./src/contact.php">En savoir plus</a></p>
		</article>
		<?php
		}
			$requete->closeCursor();
		?>
					<script type="text/javascript">
					function LearnMore(anId)
					{						
						var learn = document.getElementById('div_learn' + anId);
						if (learn.style.display=="none")
						{
							// Contenu caché, le montrer
							learn.style.display = "block";
						}
						else
						{						
							// Contenu visible, le cacher
							learn.style.display = "none";
						}
					}
			</script>
	</section>
	<footer>
		<p id="i">Tel: 	00.00.00.00.00</p>
		<p id="i">Mail: job@job.com</p>
	</footer>
	</body>
</div>
</html>