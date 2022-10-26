<?php

	class ModFilm{
		
		public $affichage;

		public function __construct(){
			require_once "controleur_film.php";
			$controleur = new controleurFilm();

			$controleur->menu();

			$this->affichage = $controleur->vue->getAffichage();
		}
	}
		
?>
