<?php

    require_once "connexion.php";
    class ModelCreationQuestion extends Connexion{

        
        
        

        public function __construct(){

        }

 

        public function erreur(){
            $this->vue->afficher_erreur();
        }

        public function get_action(){
            return $this->action;
        }

        public function creation_question(){
            if(isset($_POST["question"]) && isset($_POST["reponse1"])&& isset($_POST["reponse2"])&& isset($_POST["reponse3"])&& isset($_POST["reponse4"])){
                $question = array($_POST["question"],$_POST["reponse1"],$_POST["reponse2"],$_POST["reponse3"],$_POST["reponse4"]);
                $selecPrepare = self::$bdd->prepare('INSERT INTO (nomQuizz,niveau) Quizz VALUES (?,?,?,?)');
                $selecPrepare->execute($question);
            }
        }
    }

?>