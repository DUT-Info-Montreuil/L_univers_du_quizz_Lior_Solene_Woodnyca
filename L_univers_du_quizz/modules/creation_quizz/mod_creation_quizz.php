<?php  
    require_once "controleur_creation_quizz.php";
	class ModCreationQuizz {

		public $affichage;

		public function __construct(){
			
			$cont = new ControleurCreationQuizz();
			$cont->menu();


            if(!isset($_SESSION['pseudo'])){
                echo 'Vous devez vous connecter pour creer des quizz';
                echo '<a id="connexion" href=index.php?module=connexion&action=connexion> Connexion </a>';
            }
            else{
            	if(isset($_GET['action'])){
                    switch($_GET['action']){
                        case "creation_quizz": $cont->creer_quizz();
                            break;
                        case "ajouter": $cont->ajouter_quizz();
                            break;
                        default: $cont->erreur();
                    }
                }
            }
            $this->affichage = $cont->vue->getAffichage();
        }
			
	}

?>