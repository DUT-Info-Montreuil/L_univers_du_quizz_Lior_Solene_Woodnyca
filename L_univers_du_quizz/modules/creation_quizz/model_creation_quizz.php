<?php

    require_once "connexion.php";
    class ModelCreationQuizz extends Connexion{
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