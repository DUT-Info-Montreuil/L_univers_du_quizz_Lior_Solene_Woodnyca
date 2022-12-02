<?php
    require_once "vue_profil.php";
    
    require_once "model_profil.php";
    

    class ControleurProfil{
        public $vue;
        private $modele;
        private $action;

        public function __construct(){
            $this->vue = new VueProfil();
            $this->modele = new ModelProfil();

            if(isset($_GET['action'])){
                $this->action = $_GET['action'];
            }
            else{
                $this->action = "accueil";
            }
        }

        public function menu(){
            $this->vue->afficher_titre(); 
            
            $xp = $this->modele->getXp();
            //echo "j'ai" . $xp;
        }
    
        public function erreur(){
            $this->vue->afficher_erreur();
        }
    
        public function get_action(){
            return $this->action;
        }
    }

?>