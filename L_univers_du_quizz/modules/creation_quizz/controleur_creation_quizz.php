<?php

    class ControleurCreationQuizz{
        public $vue;
        private $modele;
        private $action;

        public function __construct(){
            require_once "vue_creation_quizz.php";
            $this->vue = new VueCreationQuizz();
            require_once "model_creation_quizz.php";
            $this->modele = new ModelCreationQuizz();
    /*
            if(isset($_GET['action'])){
                $this->action = $_GET['action'];
            }
            else{
                $this->action = "accueil";
            }*/
        }

        public function bienvenue(){
            $this->vue->afficher_bienvenue();
        }

        public function menu(){
            $this->vue->afficher_titre();
            $this->vue->creation_quizz();
            for($i = 1 ; $i<=2; $i++) {
            	$this->vue->creation_question();
            }
            
        }
    
        public function erreur(){
            $this->vue->afficher_erreur();
        }
    
        public function get_action(){
            return $this->action;
        }
    }

?>