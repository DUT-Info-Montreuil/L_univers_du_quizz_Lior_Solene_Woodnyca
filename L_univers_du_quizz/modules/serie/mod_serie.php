<?php

	class ModSerie{
		
		public $affichage;

		public function __construct(){
			require_once "controleur_serie.php";
			$controleur = new controleurSerie();

			$controleur->menu();

			$this->affichage = $controleur->vue->getAffichage();
		}
	}
		
?>
