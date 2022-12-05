<?php
    require_once "vue_creation_quizz.php";
    require_once "model_creation_quizz.php";
    require_once "modules/creation_question/mod_creation_question.php";

    class ControleurCreationQuizz{
        public $vue;
        private $modele;
        private $action;
        private $modCreationQuestion;
        

        public function __construct(){
            
            $this->vue = new VueCreationQuizz();
            $this->modele = new ModelCreationQuizz();
            
        }

        public function menu(){
            
            $this->vue->afficher_titre();
            
        }

        public function creer_quizz() {
            $this->vue->affichage_creation_quizz($this->modele->recupTheme());

        }

        public function ajouter_quizz() {
           try {

                if($this->modele->verifQuizz()) {
                
                }

                else {
                    if($this->modele->creation_quizz()){
                        
                    ?>
                        <script type="text/javascript">
                            function redirection(){
                               window.location.replace("index.php?module=creationQuestion&action=creation_question"); 
                            }
                             setTimeout("redirection()", 5000);
                        </script>

                            <div>La création du Quizz a bien fonctionné dans 5 secondes vous allez être redirigé vers la page de création de question.</div>

                    <?php
                        
                        

                     }
                     
               }

           } catch (Exception $e) {
                echo $e->getMessage(), "\n";
                $this->creer_quizz();
           }
        }

        public function erreur(){
            $this->vue->afficher_erreur();
        }
    
        public function get_action(){
            return $this->action;
        }
    }

?>