<?php

    require_once "connexion.php";
    class ModelClassement extends Connexion{
        public function __construct(){

        }
        public function erreur(){
            $this->vue->afficher_erreur();
        }

        public function get_action(){
            return $this->action;
        }
    }

?>