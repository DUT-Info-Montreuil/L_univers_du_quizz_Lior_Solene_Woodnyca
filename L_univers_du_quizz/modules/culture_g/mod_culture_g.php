<?php

	class ModCultureG{
		
		public $affichage;

		public function __construct(){
			require_once "controleur_culture_g.php";
			$controleur = new controleurCultureG();

			$controleur->menu();

			$this->affichage = $controleur->vue->getAffichage();
		}
	}
		
?>
