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
            // echo '<nav> <a href="modules/classement/controleur_classement.php">Classement</a> <a href="modules/culture_g/culture_g.php">Culture Générale</a> <a href="modules/serie/serie.php">Série</a> <a href="modules/film/film.php">Film</a> <a href="modules/japanimation/japanimation.php">Japanimation</a> </nav>';
            //   echo '<div id="classement"><h2>Classement theme</h2><p>joueur 1 theme 4</p><p>joueur 2 theme 5</p><p>joueur 3 theme 6</p><p>joueur 4 theme 2</p></div><section id="section_Quizz"><div id="Quizz_joueur" class="quizz"><h2>Quizz joueur</h2><a href="php_QuizzJoueur1">Quizz 1</a><a href="php_QuizzJoueur2">Quizz 2</a><a href="php_QuizzJoueur3">Quizz 3</a><a href="php_QuizzJoueur4">Quizz 4</a><a href="php_QuizzJoueur5">Quizz 5</a></div><div id="Quizz_theme_X" class="quizz"><h2>Quizz Theme x</h2><a href="php_QuizzTheme_x">Quizz 5</a><a href="php_QuizzTheme_x">Quizz 2</a><a href="php_QuizzTheme_x">Quizz 4</a><a href="php_QuizzTheme_x">Quizz 1</a></div></section>';

        }
        public function afficher_classement(){
            echo '
            <div class="classement" id="Classement_g" >
                <h2>Classement Thème Générale </h2>
                <ul>
                    <li>
                        <a href=# > joueur 1</a>
                    </li>

                    <li>
                        <a href=# > joueur 1</a>
                    </li>

                    <li>
                        <a href=# > joueur 1</a>
                    </li>

                    <li>
                        <a href=# > joueur 1</a>
                    </li>

                </ul>
            </div>';
           // echo '<div id="classement"><h2>Classement theme</h2><p>joueur 1 theme 4</p><p>joueur 2 theme 5</p><p>joueur 3 theme 6</p><p>joueur 4 theme 2</p></div>';
        }

        public function afficher_quizz_theme_x(){
            echo '<section id="section_Quizz"><div id="Quizz_joueur" class="quizz"><h2>Quizz joueur</h2><a href="php_QuizzJoueur1">Quizz 1</a><a href="php_QuizzJoueur2">Quizz 2</a><a href="php_QuizzJoueur3">Quizz 3</a><a href="php_QuizzJoueur4">Quizz 4</a><a href="php_QuizzJoueur5">Quizz 5</a></div><div id="Quizz_theme_X" class="quizz"><h2>Quizz Theme x</h2><a href="php_QuizzTheme_x">Quizz 5</a><a href="php_QuizzTheme_x">Quizz 2</a><a href="php_QuizzTheme_x">Quizz 4</a><a href="php_QuizzTheme_x">Quizz 1</a></div></section>';
        }

        public function afficher_quizz_joueur(){
            echo '<section id="section_Quizz">
            <div id="Quizz_joueur" class="quizz">
            <h2>Quizz joueur</h2><a href="php_QuizzJoueur1">Quizz 1</a>
            <a href="php_QuizzJoueur2">Quizz 2</a>
            <a href="php_QuizzJoueur3">Quizz 3</a>
            <a href="php_QuizzJoueur4">Quizz 4</a>
            <a href="php_QuizzJoueur5">Quizz 5</a>
            </div>
            </section>';
        }

        public function afficher_quizz_culture_g(){
            echo '<section id="section_Quizz"><div id="Quizz_culture_g" class="quizz"><h2>Quizz Culture Générale </h2><a href="php_QuizzTheme_x">Quizz 5</a><a href="php_QuizzTheme_x">Quizz 2</a><a href="php_QuizzTheme_x">Quizz 4</a><a href="php_QuizzTheme_x">Quizz 1</a></div></section>';
        }

        public function afficher_quizz_film(){
            echo '<section id="section_Quizz"><div id="Quizz_film" class="quizz"><h2>Quizz Film </h2><a href="php_Quizz_film">Quizz 5</a><a href="php_Quizz_film">Quizz 2</a><a href="php_Quizz_film">Quizz 4</a><a href="php_Quizz_film">Quizz 1</a></div></section>';
        }

        public function afficher_quizz_japanimation(){
            echo '<section id="section_Quizz"><div id="Quizz_japanimation" class="quizz"><h2>Quizz Japanimation </h2><a href="php_Quizz_japanimation">Quizz 5</a><a href="php_Quizz_japanimation">Quizz 2</a><a href="php_Quizz_japanimation">Quizz 4</a><a href="php_Quizz_japanimation">Quizz 1</a></div></section>';
        }

        public function afficher_quizz_serie(){
            echo '<section id="section_Quizz"><div id="Quizz_serie" class="quizz"><h2>Quizz Série </h2><a href="php_Quizz_serie">Quizz 5</a><a href="php_Quizz_serie">Quizz 2</a><a href="php_Quizz_serie">Quizz 4</a><a href="php_Quizz_serie">Quizz 1</a></div></section>';
        }

        public function afficher_bienvenue(){
            echo '<p>Bienvenue sur mon site !</p>';
        }
    
        public function afficher_erreur(){
            echo '<p>Erreur !</p>';
        }
    }

?>