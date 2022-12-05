
<?php

    require_once "connexion.php";
    class ModeleConnexion extends Connexion{
        
        public function __construct(){

        }


        public function connecter(){


            if(!isset($_POST["pseudo"]) || strlen($_POST['pseudo']) == 0) {
                throw new Exception("Login non valide");
            } 

            else if (!isset($_POST["password"]) || strlen($_POST['password']) == 0) {
                throw new Exception("Mot de passe non valide");
            }

            else{

                $t = array($_POST["pseudo"]);
                $selecPrepare = self::$bdd->prepare('SELECT pseudo,motDePasse FROM Utilisateur WHERE pseudo=?');
                $selecPrepare->execute($t);
                $tab = $selecPrepare->fetch();
                
                if(isset($tab) && password_verify($_POST["password"], $tab["motDePasse"])){
                    $_SESSION['pseudo'] = $tab["pseudo"];
                }
                else {
                    throw new Exception("Le pseudo ou le mot de passe est incorrect");
                    
                }

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
            $tailleMDP = 7;

            if(!isset($_POST['mail']) || strlen($_POST['mail']) < 8) {
                throw new Exception("Email obligatoire et doit etre valide");                
            }

            else if(!isset($_POST["password"])) {
                throw new Exception("Mot de passe null");
            } 
            elseif ($_POST["password"] != $_POST["passwordConfirm"]) {
                throw new Exception("Les mots de passe sont différents");  
            } 
            elseif (strlen($_POST['password']) < $tailleMDP) {
                throw new Exception("Mot de passe sont faible");
            }

            else {
                $t = array($_POST["pseudo"], $_POST['mail'], password_hash($_POST["password"], PASSWORD_DEFAULT));
                $selecPrepare = self::$bdd->prepare('INSERT INTO Utilisateur(pseudo, mail, motDePasse) VALUES (?,?,?)');
                $selecPrepare->execute($t);

                $_SESSION['pseudo'] = $_POST['pseudo'];
            }


        }


    }






?>