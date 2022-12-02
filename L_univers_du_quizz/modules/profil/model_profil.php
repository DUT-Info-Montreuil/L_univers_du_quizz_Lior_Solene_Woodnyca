<?php

    require_once "connexion.php";
    class ModelProfil extends Connexion{
        public function __construct(){

        }
        
        public function getXp() {
            //var_dump($_SESSION['pseudo']);
            $selecPrepare = self::$bdd->prepare('select pointxp from utilisateur where pseudo=?');
            $selecPrepare->execute(array($_SESSION['pseudo']));
            $tab = $selecPrepare->fetch();
            return $tab;
        }
        
         
        public function getPiece() {
            $selecPrepare = self::$bdd->prepare('select piece from utilisateur where pseudo=?');
            $selecPrepare->execute(array($_SESSION['pseudo']));
            $tab = $selecPrepare->fetch();
            return $tab;
        }
         
        public function getIndice() {
            $selecPrepare = self::$bdd->prepare('select indice from utilisateur where pseudo=?');
            $selecPrepare->execute(array($_SESSION['pseudo']));
            $tab = $selecPrepare->fetch();
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