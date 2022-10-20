<?php

    require_once "connexion.php";
    class ModelAccueil extends Connexion{
        public function __construct(){

        }

        public function menu(){
            $this->vue->afficher_titre();
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