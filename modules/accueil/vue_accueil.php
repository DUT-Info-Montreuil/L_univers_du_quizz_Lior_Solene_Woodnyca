<?php

    require_once "vue_generique.php";
    class VueAccueil extends VueGenerique{
        public function __construct () {
            parent::__construct();
        }

        public function afficher_titre(){
            echo '<h1>Accueil:</h1>';
        }

        public function afficher_menu(){
            
            echo '<div id="classement"><h2>Classement theme</h2><p>joueur 1 theme 4</p><p>joueur 2 theme 5</p><p>joueur 3 theme 6</p><p>joueur 4 theme 2</p></div><section id="section_Quizz"><div id="Quizz_joueur" class="quizz"><h2>Quizz joueur</h2><a href="php_QuizzJoueur1">Quizz 1</a><a href="php_QuizzJoueur2">Quizz 2</a><a href="php_QuizzJoueur3">Quizz 3</a><a href="php_QuizzJoueur4">Quizz 4</a><a href="php_QuizzJoueur5">Quizz 5</a></div><div id="Quizz_theme_X" class="quizz"><h2>Quizz Theme x</h2><a href="php_QuizzTheme_x">Quizz 5</a><a href="php_QuizzTheme_x">Quizz 2</a><a href="php_QuizzTheme_x">Quizz 4</a><a href="php_QuizzTheme_x">Quizz 1</a></div></section>';

        }

        public function afficher_bienvenue(){
            echo '<p>Bienvenue sur mon site !</p>';
        }
    
        public function afficher_erreur(){
            echo '<p>Erreur !</p>';
        }
    }

?>
