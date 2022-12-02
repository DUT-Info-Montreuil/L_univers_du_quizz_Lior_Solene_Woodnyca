<?php

	class ModAutres{
		
		public $affichage;

		public function __construct(){
			require_once "controleur_autres.php";
			$controleur = new controleurAutres();

			$controleur->menu();

			$this->affichage = $controleur->vue->getAffichage();
		}
	}
		
?>
