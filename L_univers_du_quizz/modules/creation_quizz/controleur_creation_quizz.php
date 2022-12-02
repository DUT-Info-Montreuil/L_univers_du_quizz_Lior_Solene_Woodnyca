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
        }

        public function bienvenue(){
            $this->vue->afficher_bienvenue();
        }

        public function menu(){
            
            $this->vue->afficher_titre();
            $this->vue->creation_quizz();
            
            
        }
    
        public function erreur(){
            $this->vue->afficher_erreur();
        }
    
        public function get_action(){
            return $this->action;
        }
    }

?>