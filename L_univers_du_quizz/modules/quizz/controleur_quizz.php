<?php
require_once "vue_quizz.php";
require_once "model_quizz.php";
    class ControleurQuizz{
        public $vue;
        private $modele;
        private $action;
        private $idQuizz;
        private $nomQuizz;
        private $nbQuestion;
        private $quizz;

        public function __construct(){
           
            $this->vue = new VueQuizz();
            $this->modele = new ModelQuizz();
            $this->idQuizz = $this->modele->recuperer_info();
            $this->nomQuizz = $this->modele->recuperer_nom_quizz();
            $this->quizz = $this->modele->recuperer_questions($this->idQuizz);
            $this->nbQuestion = $this->modele->recuperer_nb_questions($this->idQuizz);

            if(isset($_GET['action'])){
                $this->action = $_GET['action'];
            }
            else{
                $this->action = "accueil";
            }
        }

        public function menu(){

            $this->vue->afficher_titre($this->nomQuizz);
            $this->vue->afficher_questions($this->nbQuestion,$this->quizz, $this->nomQuizz);

        }

        public function verif_bonne_reponse() {
            $this->vue->vue_fin_quizz($this->modele->verif_reponse($this->nbQuestion,$this->quizz, $this->idQuizz), $this->nbQuestion);
        }

        public function erreur(){
            $this->vue->afficher_erreur();
        }

        public function get_action(){
            return $this->action;
        }
    }

?>