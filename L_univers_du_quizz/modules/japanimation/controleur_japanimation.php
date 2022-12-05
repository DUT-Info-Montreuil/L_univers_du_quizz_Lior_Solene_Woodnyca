<?php

    require_once "vue_japanimation.php";
    require_once "model_japanimation.php";
    class ControleurJapanimation{
        public $vue;
        private $modele;
        private $action;

        public function __construct(){
            $this->vue = new VueJapanimation();
            $this->modele = new ModelJapanimation();
    
            if(isset($_GET['action'])){
                $this->action = $_GET['action'];
            }
            else{
                $this->action = "accueil";
            }
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