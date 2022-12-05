<?php

    require_once "connexion.php";
    class ModelProfil extends Connexion{
        public function __construct(){

        }

        public function get_profil() {
            
            $selecPrepare = self::$bdd->prepare('select * from Utilisateur where pseudo=?');
            $selecPrepare->execute(array($_SESSION['pseudo']));
            $tab = $selecPrepare->fetchAll();
            return $tab;
        }

        public function erreur(){
            $this->vue->afficher_erreur();
        }

        public function get_action(){
            return $this->action;
        }
    }

?>