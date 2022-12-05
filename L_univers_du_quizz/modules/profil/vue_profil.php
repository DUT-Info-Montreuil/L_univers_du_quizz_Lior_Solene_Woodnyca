<?php

    require_once "vue_generique.php";
    class VueProfil extends VueGenerique{
        public function __construct () {
            parent::__construct();
        }

        public function afficher_titre(){
            echo '<h1>Profil :</h1>';
        }

        public function afficher_profil($profil) {

            foreach ($profil as $row) {
                print 'Pseudo : ' . $row['pseudo'] . "</br>";
                print 'Point XP : ' . $row['pointxp'] . "</br>";
                print 'Piece : ' . $row['piece'] . "</br>";
                print 'Indice : ' . $row['indice'] . "</br>";
            }
        }

        
        public function afficher_erreur(){
            echo '<p>Erreur !</p>';
        }
    }

?>