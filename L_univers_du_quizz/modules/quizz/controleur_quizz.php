<?php

    class ControleurQuizz{
        public $vue;
        private $modele;
        private $action;
        private $idQuizz;
        private $nomQuizz;
        private $nbQuestion;
        private $quizz;

        public function __construct(){
            require_once "vue_quizz.php";
            $this->vue = new VueQuizz();
            require_once "model_quizz.php";
            $this->modele = new ModelQuizz();
    
            if(isset($_GET['action'])){
                $this->action = $_GET['action'];
            }
            else{
                $this->action = "accueil";
            }
        }

       

        public function menu(){
            $this->idQuizz = $this->modele->recuperer_info();
            $this->nomQuizz = $this->modele->recuperer_nom_quizz();
            $this->vue->afficher_titre($this->nomQuizz);
            $this->quizz = $this->modele->recuperer_questions($this->idQuizz);
            $this->nbQuestion = $this->modele->recuperer_nb_questions($this->idQuizz);
            $this->vue->afficher_questions($this->nbQuestion,$this->quizz);
        }
    
        public function erreur(){
            $this->vue->afficher_erreur();
        }
    
        public function get_action(){
            return $this->action;
        }
    }

?>