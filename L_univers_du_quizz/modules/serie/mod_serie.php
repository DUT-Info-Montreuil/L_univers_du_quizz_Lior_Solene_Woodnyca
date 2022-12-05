<?php

	require_once "controleur_serie.php";
	class ModSerie{
		
		public $affichage;

		public function __construct(){
			$controleur = new controleurSerie();

			$controleur->menu();

			$this->affichage = $controleur->vue->getAffichage();
		}
	}
		
?>
