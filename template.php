<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="style.css"/>
	<title>Accueil</title>
</head>





<body>
	<header>
		<?php
			include_once "composants/comp_menu.php";
			$menu = new compMenu();
			echo $menu->affiche();
		?>
	</header>
	
	<main>	
		<?php 
			if(isset($module)){echo $module->affichage;}
		?>
	</main>

	<footer>
		<p> 2022 Tout droits réservés  Site de Woodnyca Solène et Lior</p>
	</footer>

</body>