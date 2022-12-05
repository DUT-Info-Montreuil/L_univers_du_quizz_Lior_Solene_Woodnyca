<?php

	require_once "controleur_profil.php";
	class ModProfil{

		public $affichage;

		public function __construct(){
			$controleur = new controleurProfil();

			$controleur->menu();

			$this->affichage = $controleur->vue->getAffichage();
		}
	}

?>