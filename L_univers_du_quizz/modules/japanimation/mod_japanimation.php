<?php

	require_once "controleur_japanimation.php";
	class ModJapanimation{
		
		public $affichage;

		public function __construct(){
			$controleur = new controleurJapanimation();

			$controleur->menu();

			$this->affichage = $controleur->vue->getAffichage();
		}
	}
		
?>
