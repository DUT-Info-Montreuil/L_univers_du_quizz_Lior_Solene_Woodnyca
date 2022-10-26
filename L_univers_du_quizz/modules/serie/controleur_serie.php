<?php

    class ControleurSerie{
        public $vue;
        private $modele;
        private $action;

        public function __construct(){
            require_once "vue_serie.php";
            $this->vue = new VueSerie();
            require_once "model_serie.php";
            $this->modele = new ModelSerie();
    
            if(isset($_GET['action'])){
                $this->action = $_GET['action'];
            }
            else{
                $this->action = "accueil";
            }
        }

        public function bienvenue(){
            $this->vue->afficher_bienvenue();
        }

        public function menu(){
            $this->vue->afficher_titre();
            $this->vue->afficher_quizz();
            
        }
    
        public function erreur(){
            $this->vue->afficher_erreur();
        }
    
        public function get_action(){
            return $this->action;
        }
    }

?>