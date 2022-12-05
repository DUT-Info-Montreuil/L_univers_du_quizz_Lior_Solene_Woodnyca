<?php

	require_once "cont_creation_question.php";
	class ModCreationQuestion{

		public $affichage;

		public function __construct(){
			$controleur = new ControleurCreationQuestion();

			if(isset($_GET['action'])){
                    switch($_GET['action']){
                        case "creation_question": 
                        $controleur->creer_question();
                            break;
                        case "ajouter": 
	                        if(isset($_POST['btn-fin_question'])) {
	                        	$controleur->ajouter_question();
	                        }
	                        else{
	                        	$controleur->ajouter_question();
	                        	$controleur->creer_question();
	                        }
                        	break;

                        default:;
                    }
                }

			$this->affichage = $controleur->vueCreaQuestion->getAffichage();
		}
	}

?>