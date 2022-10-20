<!DOCTYPE HTML>
<HTML lang="fr">

	<head>
		<meta charset="UTF-8"/>
		<title>Univers de Quizz</title>
		<LINK href="style.css" rel="stylesheet" type="text/css">
 	</head>

<body>

	<header>
		<?php
			include_once "composants/comp_menu.php";
			$menu = new compMenu();
			echo $menu->affiche();
		?>
	</header>

	<nav>
		<a href="modules/classement/classement.php">Classement</a> 
		<a href="modules/culture_g/culture_g.php">Culture Générale</a> 
		<a href="modules/serie/serie.php">Série</a> 
		<a href="modules/film/film.php">Film</a> 
		<a href="modules/japanimation/japanimation.php">Japanimation</a> 
	</nav>

 	</nav>
	
	<main>	
		<?php 
			if(isset($module)){echo $module->affichage;}
		?>


 		
	</main>

	<footer>
 		<p>Tous les droits réserver à Solène, Lior, Woodnyca. 2022</p>
 	</footer>

</body>





