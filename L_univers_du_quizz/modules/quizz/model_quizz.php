<?php

    require_once "connexion.php";
    class ModelQuizz extends Connexion{

        private $idQuizz;
        private $nomQuizz;
        private $quizz;

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
                return $this->idQuizz;
            }
            else{
                echo 'id pas trouver';
            } 

        }

        public function recuperer_nom_quizz(){
            if(isset($_GET['nomQuizz'])){
                $this->nomQuizz = $_GET['nomQuizz'];
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
         
            return $nbQuestion[0];
        }

        public function recuperer_questions($idQuizz){
            $selectPrepare = self::$bdd->prepare('SELECT * FROM QCM WHERE idQuizz=?');
            $selectPrepare->execute(array($idQuizz));
            $array = $selectPrepare->fetchall();
            $this->quizz = $array;
            return $array;
        }

        public function verif_reponse($nbQuestion,$quizz, $idQuizz){
            $resultat = 0;
            $total = 0;

            $rechercheidUser = self::$bdd->prepare('SELECT idUser from Utilisateur where pseudo=?');
            $rechercheidUser->execute(array($pseudo));
            $result = $rechercheidUser->fetch();

            $verifSauvegarde = self::$bdd->prepare('SELECT estTerminer from Sauvegarder where idUser = ? and idQuizz = ?');  
            $verifSauvegarde->execute(array($result["idUser"], $idQuizz));
            $result2 = $verifSauvegarde->fetchAll();

            for($i=0;$i<$nbQuestion;$i++){

                if(isset($result2[0])){
                    $xp = 0;
                    $piece = 0;    
                }
                else{
                    $xp = $quizz[$i]["xp"];
                    $piece = $quizz[$i]["piece"];
                }

                $total= $total + $quizz[$i]["xp"];

                foreach ($_POST['reponse'. $i] as $rep) {
                    $reponse .= $rep;
                }

                if($reponse == $quizz[$i]["ReponseVrai"]) {
                    $resultat = $resultat+1;
                    $selectPrepare = self::$bdd->prepare("UPDATE Utilisateur SET pointxp = pointxp+?, piece = piece+? WHERE pseudo = ?");
                    $selectPrepare->execute(array($xp, $piece, $_SESSION['pseudo']));

                }
                $reponse= null;
                
            }
            //methode ne fonctionne pas, elle sert a savoir si le user a deja jouer la partie ou non mais comme idUser dans Sauvegarder est unique cela ne fonctionne pas

            /*
            $selectPrepare2= self::$bdd->prepare("insert into Sauvegarder (idUser, idQuizz, score, estTerminer) VALUES (?,?,?,?)");
            $selectPrepare2->execute(array($result["idUser"], $idQuizz, $total, true));*/
            return $resultat;

        }
        
    }
?>

