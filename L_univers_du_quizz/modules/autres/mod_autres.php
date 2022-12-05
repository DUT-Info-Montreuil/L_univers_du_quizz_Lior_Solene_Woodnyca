<?php

	require_once "controleur_autres.php";
	class ModAutres{

		public $affichage;

		public function __construct(){
			$controleur = new controleurAutres();

			$controleur->menu();

			$this->affichage = $controleur->vue->getAffichage();
		}
	}

?>