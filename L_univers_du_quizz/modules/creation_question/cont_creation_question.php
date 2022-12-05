<?php
require_once "vue_creation_question.php";
require_once "model_creation_question.php";

    class ControleurCreationQuestion{
        public $vueCreaQuestion;
        private $modeleCreaquestion;
        private $action;
        

        public function __construct(){
            
            $this->vueCreaQuestion = new VueCreationQuestion();
            $this->modeleCreaQuestion = new ModelCreationQuestion();

            if(isset($_GET['action'])){
                $this->action = $_GET['action'];
            }
            else{
                $this->action = "creation_question";
            }
        }

        public function creer_question() {
            $this->vueCreaQuestion->creation_question();
        }

        public function ajouter_question() {
            try{
                if(isset($_POST['btn-ajout_question'])) {
                    $this->modeleCreaQuestion->creation_question();
                }
                else if(isset($_POST['btn-fin_question'])) {
                    $this->modeleCreaQuestion->verif_nb_question();
                    $this->vueCreaQuestion->afficher_fin_question();
                    ?>
                        <script type="text/javascript">
                            function redirection(){
                               window.location.replace("index.php?module=creationQuizz&action=creation_quizz"); 
                            }
                            setTimeout("redirection()", 3000);
                        </script>
                    <?php
                }

            } catch(Exception $e) {
                echo $e->getMessage(), "\n";
                $this->creer_question();
            }
        }

        public function erreur(){
            $this->vueCreaQuestion->afficher_erreur();
        }

        public function get_action(){
            return $this->action;
        }
        
    }

?>