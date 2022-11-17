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

        public function bienvenue(){
            $this->vue->afficher_bienvenue();
        }

        public function menu(){
          //  $this->vue->afficher_titre();
            $this->vue->afficher_classement();
            //  $this->vue->afficher_quizz_theme_x();
            $this->vue->afficher_quizz_joueur();
            $this->vue->afficher_quizz_culture_g();
            $this->vue->afficher_quizz_film();
            $this->vue->afficher_quizz_japanimation();
            $this->vue->afficher_quizz_serie();

            
        }
    
        public function erreur(){
            $this->vue->afficher_erreur();
        }
    
        public function get_action(){
            return $this->action;
        }
    }

?>