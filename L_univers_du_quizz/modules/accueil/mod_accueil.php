<?php

	require_once "controleur_accueil.php";
	class ModAccueil{
		
		public $affichage;

		public function __construct(){
			$controleur = new controleurAccueil();

			$controleur->menu();
			$this->affichage = $controleur->vue->getAffichage();
		}
	}
		
?>
