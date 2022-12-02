<?php

    class ControleurCreationQuestion{
        public $vueCreaQuestion;
        private $modeleCreaquestion;
        private $vueCreaQuizz;
        private $modeleCreaQuizz;
        private $nb_question;
        

        public function __construct(){
            require_once "vue_creation_question.php";
            $this->vueCreaQuestion = new VueCreationQuestion();
            require_once "model_creation_question.php";
            $this->modeleCreaQuestion = new ModelCreationQuestion();
            $this->nb_question=1;

        }

        public function bienvenue(){
            $this->vueCreaquestion->afficher_bienvenue();
        }

        public function menu(){
            $this->vueCreaQuestion->creation_question($this->nb_question);    
        }
    
        public function erreur(){
            $this->vueCreaQuestion->afficher_erreur();
        }
    
        public function get_action(){
            return $this->action;
        }
    }

?>