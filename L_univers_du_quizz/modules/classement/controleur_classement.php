<?php

    require_once "vue_classement.php";
    require_once "model_classement.php";
    class ControleurClassement{
        public $vue;
        private $modele;
        private $action;

        public function __construct(){
            $this->vue = new VueClassement();
            $this->modele = new ModelClassement();
    
            if(isset($_GET['action'])){
                $this->action = $_GET['action'];
            }
            else{
                $this->action = "accueil";
            }
        }

        public function menu(){
            $this->vue->afficher_titre();
            $this->vue->afficher_classements();
        }
    
        public function erreur(){
            $this->vue->afficher_erreur();
        }
    
        public function get_action(){
            return $this->action;
        }
    }

?>