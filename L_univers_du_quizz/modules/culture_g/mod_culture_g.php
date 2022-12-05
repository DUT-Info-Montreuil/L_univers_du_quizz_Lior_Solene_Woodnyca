<?php

	require_once "controleur_culture_g.php";
	class ModCultureG{
		
		public $affichage;

		public function __construct(){
			$controleur = new controleurCultureG();

			$controleur->menu();

			$this->affichage = $controleur->vue->getAffichage();
		}
	}
		
?>
