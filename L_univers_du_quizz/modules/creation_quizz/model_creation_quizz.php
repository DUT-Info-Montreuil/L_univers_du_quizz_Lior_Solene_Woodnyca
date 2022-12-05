<?php

    require_once "connexion.php";
    class ModelCreationQuizz extends Connexion{

        public function __construct(){

        }

        public function creation_quizz(){

            if(!isset($_POST["nomQuizz"]) || strlen($_POST["nomQuizz"]) == 0) {
                throw new Exception("Nom quizz non valide ou vide");
                unset($_POST["nomQuizz"]);
            } 
           
            else if(!isset($_POST["niveau_quizz"]) || strcmp($_POST['niveau_quizz'], 'choisir un niveau de difficulté') ==0){
                throw new Exception("Niveau quizz non entrer");  
            }

            else if(!isset($_POST['theme']) || strcmp($_POST['theme'], 'choisir un theme') ==0) {
                throw new Exception("Theme du quizz non entrer");
            }

            else {

                $pseudo = array($_SESSION['pseudo']);

                $rechercheidUser = self::$bdd->prepare('SELECT idUser from Utilisateur where pseudo=?');
                $rechercheidUser->execute($pseudo);
                $result = $rechercheidUser->fetch();
                
                $rechercheidTheme = self::$bdd->prepare('SELECT idTheme from Theme where nomTheme=?');
                $rechercheidTheme->execute(array($_POST['theme']));
                $result2 = $rechercheidTheme->fetch();
                

                $quizz = array($_POST["nomQuizz"],$_POST["niveau_quizz"],$result2[0],$result["idUser"]);
                $selecPrepare = self::$bdd->prepare('INSERT INTO Quizz(nomQuizz,niveau,idTheme,idUser)  VALUES (?,?,?,?)');
                
                $selecPrepare->execute($quizz);
                
                $this->recupIdQuizz();
                return 1;

            }

            unset($_POST['nomQuizz']);
            unset($_POST['niveau_quizz']);
            unset($_POST['theme']);

        }

        public function verifQuizz() {

            if(!isset($_POST["nomQuizz"]) || strlen($_POST["nomQuizz"]) == 0) {
                throw new Exception("Nom quizz non valide ou vide");
                unset($_POST["nomQuizz"]);
            } 

            else {

                $nomQuizz = array($_POST["nomQuizz"]);
                $selectPrepare = self::$bdd->prepare('SELECT nomQuizz FROM Quizz where nomQuizz = ?');
                $selectPrepare->execute($nomQuizz);
                $tab = $selectPrepare->fetchAll();
                

                if(isset($tab[0])) {
                    throw new Exception("Nom de quizz déja utiliser");
                    unset($_POST["nomQuizz"]);
                    
                }
            }
        }

        public function recupIdQuizz() {

            $nomQuizz = array($_POST["nomQuizz"]);

            $selectPrepare = self::$bdd->prepare('SELECT idQuizz from Quizz where nomQuizz=?');
            $selectPrepare->execute($nomQuizz);
            $idQuizz = $selectPrepare->fetch();
            
            $_SESSION["idQuizz"] = $idQuizz[0];

        }

        public function recupTheme() {

            $selectPrepare = self::$bdd->prepare('SELECT * FROM Theme');
            $selectPrepare->execute();
            $tabTheme = $selectPrepare->fetchAll();
            return $tabTheme;
        }
    }

?>