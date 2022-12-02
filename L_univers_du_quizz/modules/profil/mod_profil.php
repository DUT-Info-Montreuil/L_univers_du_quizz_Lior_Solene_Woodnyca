<?php

	class ModProfil{
		
		public $affichage;

		public function __construct(){
			require_once "controleur_profil.php";
			$controleur = new controleurProfil();

			$controleur->menu();

			$this->affichage = $controleur->vue->getAffichage();
		}
	}
		
?>
