<?php
    require_once "controleur_quizz.php";
	class ModQuizz{
		
		public $affichage;

		public function __construct(){
			
			$controleur = new controleurQuizz();

			$controleur->menu();

			$this->affichage = $controleur->vue->getAffichage();
		}
	}
		
?>
