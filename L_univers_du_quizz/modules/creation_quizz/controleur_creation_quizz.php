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
            $this->vue->creation_question_1();
            $this->vue->creation_question_2();
            $this->vue->creation_question_3();
            $this->vue->creation_question_4();
            $this->vue->creation_question_5();
            $this->vue->creation_question_6();
            $this->vue->creation_question_7();
            $this->vue->creation_question_8();
            $this->vue->creation_question_9();
            $this->vue->creation_question_10();
            
        }
    
        public function erreur(){
            $this->vue->afficher_erreur();
        }
    
        public function get_action(){
            return $this->action;
        }
    }

?>