<?php

    require_once "connexion.php";
    class ModelQuizz extends Connexion{

        private $idQuizz;
        private $nomQuizz;

        public function __construct(){

        }
        public function erreur(){
            $this->vue->afficher_erreur();
        }

        public function get_action(){
            return $this->action;
        }

        public function recuperer_info(){
            if(isset($_GET['idQuizz'])){
                $this->idQuizz = $_GET['idQuizz'];
               // echo $this->idQuizz;
                return $this->idQuizz;
            }
            else{
                echo 'id pas trouver';
            } 
              
        }

        public function recuperer_nom_quizz(){
            if(isset($_GET['nomQuizz'])){
                $this->nomQuizz = $_GET['nomQuizz'];
               // echo $this->nomQuizz;
                return $this->nomQuizz;
            }
            else{
                echo 'nom pas trouver';
            }  
        }

        public function recuperer_nb_questions($idQuizz){
            $selectPrepare = self::$bdd->prepare('SELECT count(Question) FROM QCM WHERE idQuizz=?');
            $selectPrepare->execute(array($idQuizz));
            $nbQuestion = $selectPrepare->fetch();
            //echo 'nombre de question ';
            //echo $nbQuestion[0];
            //var_dump($nbQuestion);

            return $nbQuestion[0];
        }

        public function recuperer_questions($idQuizz){
            $selectPrepare = self::$bdd->prepare('SELECT * FROM QCM WHERE idQuizz=?');
            $selectPrepare->execute(array($idQuizz));
            $array = $selectPrepare->fetchall();
            //var_dump($array);
            return $array;
        }

        public function enregistrer_reponse($nbQuestion,$quizz){
            $reponseVrai;
            for($i=0;$i<$nbQuestion;$i++){
                if(isset($_POST["a"]) ){
                    $reponseVrai="a";
                    if($quizz[$i][6] == $reponseVrai){
                        if(isset($_POST["b"])){
                            if(isset($_POST["c"])){
                                if(isset($_POST["d"])){
    
                                }
                            }
                        }
                    }
                    
                }
                    
            }
        }
    }

?>