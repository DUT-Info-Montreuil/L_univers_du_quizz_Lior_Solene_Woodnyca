<?php

    require_once "vue_connexion.php";
    require_once "modele_connexion.php";
    class ControleurConnexion{

        public $vue;
        private $modele;

        public function __construct(){
            $this->vue = new VueConnexion();
            $this->modele = new ModeleConnexion();

        }


        public function form_connexion(){
            $this->vue->form_connexion();
        }

        public function form_inscription(){
            $this->vue->form_inscription();
        }


        public function connecter(){
            try{

                $this->modele->connecter();
                $this->vue->resultat_connexion();
            } catch(Exception $e) {
                echo $e->getMessage();
                $this->form_connexion();
            }

        }

        public function inscrire(){
            try{
                if($this->modele->verifInscription()){
                $this->vue->pseudoDejaPris();
                }
                else{
                    $this->modele->inscrire();
                    $this->vue->resultat_inscription();
                }
            }catch(Exception $e){
                echo $e->getMessage(), "\n";
                $this->form_inscription();
            }

            
        }

        public function deconnexion(){
            unset($_SESSION['pseudo']);
            $this->vue->deconnexion();
        }

        public function dejaConnecte(){
            $this->vue->dejaConnecte();
        }

        public function erreur(){
            $this->vue->afficher_erreur();
        }


    }



?>
