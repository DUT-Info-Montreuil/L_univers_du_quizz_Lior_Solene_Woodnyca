<?php

	require_once "controleur_classement.php";
	class ModClassement{
		
		public $affichage;

		public function __construct(){
			$controleur = new controleurClassement();

			$controleur->menu();

			$this->affichage = $controleur->vue->getAffichage();
		}
	}
		
?>
