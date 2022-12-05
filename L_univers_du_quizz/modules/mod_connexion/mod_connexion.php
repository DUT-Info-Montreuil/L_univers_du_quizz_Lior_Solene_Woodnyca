<?php


    require_once "cont_connexion.php";
    class ModConnexion{
        

        public $affichage;

        public function __construct(){
            $cont = new ControleurConnexion();

            if(isset($_GET['action'])){

                if(isset($_SESSION['pseudo'])){
                    if($_GET['action'] == "deconnexion"){$cont->deconnexion();}
                    else{$cont->dejaConnecte();}
                }
                else{
                    switch($_GET['action']){
                        case "connexion": $cont->form_connexion();
                            break;
                        case "connecter": $cont->connecter();
                            break;
                        case "inscription": $cont->form_inscription();
                            break;
                        case "inscrire": $cont->inscrire();
                            break;
                        default:
                    }
                }
            }
            else{
                $cont->erreur();
            }


            $this->affichage = $cont->vue->getAffichage();
        }
    }
	


?>
