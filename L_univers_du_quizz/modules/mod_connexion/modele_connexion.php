
<?php

    require_once "connexion.php";
    class ModeleConnexion extends Connexion{
        
        public function __construct(){

        }


        public function connecter(){
                
            $t = array($_POST["pseudo"]);
            $selecPrepare = self::$bdd->prepare('SELECT pseudo,motDePasse FROM Utilisateur WHERE pseudo=?');
            $selecPrepare->execute($t);
            $tab = $selecPrepare->fetchall();

            if(isset($tab[0]) && password_verify($_POST["password"], $tab[0]['password'])){
                $_SESSION['pseudo'] = $tab[0]['pseudo'];
            }


            unset($tab);
            unset($_POST["pseudo"]);
            unset($_POST["password"]);

        }


        public function verifInscription(){

            if(!isset($_POST["pseudo"]) || strlen($_POST['pseudo']) == 0) {
                throw new Exception("Login non valide");
            } 

            $t = array($_POST["pseudo"]);
            $selecPrepare = self::$bdd->prepare('SELECT pseudo FROM Utilisateur WHERE pseudo=?');
            $selecPrepare->execute($t);
            $tab = $selecPrepare->fetchAll();
           
            if(isset($tab[0])) {
                throw new Exception("Login déja existant");
                
            }

        }

        public function inscrire(){

            $tailleMDP = 4;

            if(!isset($_POST["password"])) {
                throw new Exception("Mot de passe null");
            } 
            elseif ($_POST["password"] != $_POST["passwordConfirm"]) {
                throw new Exception("Les mots de passe sont différents");  
            } 
            elseif (strlen($_POST['password']) < $tailleMDP) {
                throw new Exception("Mot de passe sont faible");
            }

            else {
                $t = array($_POST["pseudo"], password_hash($_POST["password"], PASSWORD_DEFAULT));
                $selecPrepare = self::$bdd->prepare('INSERT INTO Utilisateur(pseudo, motDePasse) VALUES (?,?)');
                $selecPrepare->execute($t);

                $_SESSION['pseudo'] = $_POST['pseudo'];
            }

        

        }


    }






?>