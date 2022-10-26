<?php

	class ModJapanimation{
		
		public $affichage;

		public function __construct(){
			require_once "controleur_japanimation.php";
			$controleur = new controleurJapanimation();

			$controleur->menu();

			$this->affichage = $controleur->vue->getAffichage();
		}
	}
		
?>
