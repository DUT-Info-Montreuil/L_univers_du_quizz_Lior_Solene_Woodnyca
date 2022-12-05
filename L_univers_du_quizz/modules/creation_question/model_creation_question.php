<?php

    require_once "connexion.php";
    class ModelCreationQuestion extends Connexion{

        private $xp;
        private $piece;



        public function __construct(){
            $this->xp = 5;
            $this->piece = 1;
            
        }

        public function creation_question(){
            
           
            if(!isset($_POST["question"])) {
                throw new Exception("Question non valide");

            } 
            else if (!isset($_POST["reponse1"]) && !isset($_POST["reponse2"]) && !isset($_POST["reponse3"]) && !isset($_POST["reponse4"])) {
                throw new Exception("Entrer les reponses possibles");
                
            }
            else if (!isset($_POST['bonneReponse'])) {
                throw new Exception("Cocher au moins une bonne reponse");
            }

            else {
                foreach ($_POST['bonneReponse'] as $reponse) {
                    $bReponse .= $reponse;
                }
                
                $question = array($_POST["question"],$_POST["reponse1"],$_POST["reponse2"],$_POST["reponse3"],$_POST["reponse4"], $bReponse, $this->xp, $this->piece, $_SESSION['idQuizz']);
                $selecPrepare = self::$bdd->prepare('INSERT INTO QCM (Question, reponse1, reponse2, reponse3, reponse4, ReponseVrai, xp, piece, idQuizz) VALUES (?,?,?,?,?,?,?,?,?)');
                $selecPrepare->execute($question);
            }

            unset($_POST['question']);
            unset($_POST['reponse1']);
            unset($_POST['reponse2']);
            unset($_POST['reponse3']);
            unset($_POST['reponse4']);
            unset($_POST['bonneReponse']);

        }

        public function verif_nb_question() {

            if(isset($_POST['question'])) {
                $this->creation_question();
            }

            $selectPrepare = self::$bdd->prepare('SELECT count(*) FROM QCM WHERE idQuizz=?');
            $selectPrepare->execute(array($_SESSION["idQuizz"]));
            $nb_question = $selectPrepare->fetch();

            if($nb_question[0] < 2) {
                throw new Exception("Vous devez au moins faire 2 questions");
            }

        }
    }

?>