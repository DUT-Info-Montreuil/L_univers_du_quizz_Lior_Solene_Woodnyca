<?php

    require_once "vue_culture_g.php";
    require_once "model_culture_g.php";
    class ControleurCultureG{
        public $vue;
        private $modele;
        private $action;

        public function __construct(){
            $this->vue = new VueCultureG();
            $this->modele = new ModelCultureG();
    
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