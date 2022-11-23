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

        public function creation_quizz(){
            if(isset($_POST["nomQuizz"]) && isset($_POST["niveau_quizz"])){
                $quizz = array($_POST["nomQuizz"],$_POST["niveau_quizz"]);
                $selecPrepare = self::$bdd->prepare('INSERT INTO (nomQuizz,niveau) Quizz VALUES (?,?)');
                $selecPrepare->execute($quizz);
            }
        }
    }

?>