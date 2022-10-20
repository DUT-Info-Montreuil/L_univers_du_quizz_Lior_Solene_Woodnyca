<?php

    class ControleurAccueil{
        public $vue;
        private $modele;
        private $action;

        public function __construct(){
            require_once "vue_accueil.php";
            $this->vue = new VueAccueil();
            require_once "model_accueil.php";
            $this->modele = new ModelAccueil();
    
            if(isset($_GET['action'])){
                $this->action = $_GET['action'];
            }
            else{
                $this->action = "accueil";
            }
        }
/*
        public function affiche_page_culture_g(){
            echo '<a href"cultureG.php" id="cultureG"> culture g</a>';
        }
*/
        public function bienvenue(){
            $this->vue->afficher_bienvenue();
        }

        public function menu(){
            $this->vue->afficher_menu();
        }
    
        public function erreur(){
            $this->vue->afficher_erreur();
        }
    
        public function get_action(){
            return $this->action;
        }
    }

?>