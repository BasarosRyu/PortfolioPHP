<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style/css/style.css" />
	<meta name="keywords" content="portfolio, réseau social, wac, web@cademie, webacademie">
	<link href="http://fr.allfont.net/allfont.css?fonts=capture-it" rel="stylesheet" type="text/css" />

	<title>Portfolio</title>
</head>
<body>
	<header>
		<?php include('header.php'); ?>
	</header>
	<main>
		<div class="slider-container">

			<div class="pageSlide PSactive" id="pageAccueil">
				<div class="contain-page">
					<div class="accueil-title">
						<h1 id="accueil-title-p">Portfolio</h1>
					</div>
					<div class="accueil-descrip">
						<p>
							Réalisé avec HTML, SASS, JQUERY
						</p>
						<p class="accueil-padding-p">
							Et le numéro complémentaire : PHP
						</p>
					</div>
				</div>
			</div>
			<?php 

			include('about.php');
			include('coordonnees.php');
			include('exp.php');
			include('project.php');
			include('hobby.php');
			include('coordonnees2.php');
			include('contact.php');
			?>

		</div>
	</main>
	<script src="js/jquery.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/formContact.js"></script>
	<script src="js/infobulles.js"></script>
	<script src="js/projet.js"></script>
</body>
</html>