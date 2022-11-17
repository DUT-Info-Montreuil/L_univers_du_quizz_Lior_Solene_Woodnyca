<!DOCTYPE html>
<HTML lang="fr">

	<head>
		<meta charset="UTF-8"/>
		<title>Univers de Quizz</title>
		
		<!-- CSS only-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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
		
		<main >	
			<?php 
				if(isset($module)){echo $module->affichage;}
			?>

		</main>

		<footer>
			<p>Tous les droits réserver à Solène, Lior, Woodnyca. 2022</p>
		</footer>

	</body>
</html>