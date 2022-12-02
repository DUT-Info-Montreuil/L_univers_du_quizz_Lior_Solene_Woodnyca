<?php

	class ModCreationQuizz{
		
		public $affichage;

		public function __construct(){
			require_once "controleur_creation_quizz.php";
			$controleur = new controleurCreationQuizz();

			$controleur->menu();

			$this->affichage = $controleur->vue->getAffichage();
		}
	}
		
?>
