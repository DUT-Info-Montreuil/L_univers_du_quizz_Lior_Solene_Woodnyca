<?php

	require_once "controleur_film.php";
	class ModFilm{
		
		public $affichage;

		public function __construct(){
			$controleur = new controleurFilm();

			$controleur->menu();

			$this->affichage = $controleur->vue->getAffichage();
		}
	}
		
?>
