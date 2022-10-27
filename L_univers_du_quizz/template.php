<!DOCTYPE html>
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
			
			<a href="index.php?module=classement">Classement</a> 
			<a href="index.php?module=cultureG">Culture Générele</a>  
			<a href="index.php?module=serie">Série</a> 
			<a href="index.php?module=film">Film</a> 
			<a href="index.php?module=japanimation">Japanimation</a>
			<a href="index.php?module=creationQuizz">Création de quizz</a>

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
</html>