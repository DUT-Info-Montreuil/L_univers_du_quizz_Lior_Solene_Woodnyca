<?php

	class ModCreationQuestion{
		
		public $affichage;

		public function __construct(){
			require_once "cont_creation_question.php";
			$controleur = new ControleurCreationQuestion();

			$controleur->menu();

			$this->affichage = $controleur->vueCreaQuestion->getAffichage();
		}
	}
		
?>
