<?php

	class ModClassement{
		
		public $affichage;

		public function __construct(){
			require_once "controleur_classement.php";
			$controleur = new controleurClassement();

			$controleur->menu();

			$this->affichage = $controleur->vue->getAffichage();
		}
	}
		
?>
