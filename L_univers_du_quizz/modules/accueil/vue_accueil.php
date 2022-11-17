<?php

    require_once "vue_generique.php";
    class VueAccueil extends VueGenerique{
        public function __construct () {
            parent::__construct();
        }

        public function afficher_titre(){
            echo '<h1>Accueil:</h1>';
        }

        public function afficher_classement(){
            echo '
                <div class="classement" id="Classement_g" >
                    <h2>Classement Thème Générale </h2>
                    <ul>
                        <li>
                            <p> Joueur 1 theme Culture g</p>
                            <p> score </p>
                        </li>

                        <li>
                            <p> Joueur 1 theme Série</p>
                            <p> score </p>
                        </li>

                        <li>
                            <p> Joueur 1 theme Film</p>
                            <p> score </p>
                        </li>

                        <li>
                            <p> Joueur 1 theme Japanimation</p>
                            <p> score </p>
                        </li>

                    </ul>
                </div>';
        }

        public function afficher_quizz_theme_x(){
            echo '
            
                <div id="Quizz_theme_X" class="quizz">
                    <h2>Quizz Theme x</h2>
                    <a href="php_QuizzTheme_x">Quizz 5</a>
                    <a href="php_QuizzTheme_x">Quizz 2</a>
                    <a href="php_QuizzTheme_x">Quizz 4</a>
                    <a href="php_QuizzTheme_x">Quizz 1</a>
                </div>';
        }

        public function afficher_quizz_joueur(){
            echo '
           
                <div id="Quizz_joueur" class="quizz">
                    <h2>Quizz joueur</h2>
                    <a href="php_QuizzJoueur1">Quizz 1</a>
                    <a href="php_QuizzJoueur2">Quizz 2</a>
                    <a href="php_QuizzJoueur3">Quizz 3</a>
                    <a href="php_QuizzJoueur4">Quizz 4</a>
                    <a href="php_QuizzJoueur5">Quizz 5</a>
                </div>
            ';
        }

        public function afficher_quizz_culture_g(){
            echo '
            
                <div id="Quizz_culture_g" class="quizz">
                    <h2>Quizz Culture Générale </h2>
                    <a href="php_QuizzTheme_x">Quizz 5</a>
                    <a href="php_QuizzTheme_x">Quizz 2</a>
                    <a href="php_QuizzTheme_x">Quizz 4</a>
                    <a href="php_QuizzTheme_x">Quizz 1</a>
                </div>';
        }

        public function afficher_quizz_film(){
            echo '
                <div id="Quizz_film" class="quizz">
                    <h2>Quizz Film </h2>
                    <a href="php_Quizz_film">Quizz 5</a>
                    <a href="php_Quizz_film">Quizz 2</a>
                    <a href="php_Quizz_film">Quizz 4</a>
                    <a href="php_Quizz_film">Quizz 1</a>
                </div>
           ';
        }

        public function afficher_quizz_japanimation(){
            echo '
           
                <div id="Quizz_japanimation" class="quizz">
                    <h2>Quizz Japanimation </h2>
                    <a href="php_Quizz_japanimation">Quizz 5</a>
                    <a href="php_Quizz_japanimation">Quizz 2</a>
                    <a href="php_Quizz_japanimation">Quizz 4</a>
                    <a href="php_Quizz_japanimation">Quizz 1</a>
                </div>';
        }

        public function afficher_quizz_serie(){
            echo '
                <div id="Quizz_serie" class="quizz">
                    <h2>Quizz Série </h2>
                    <a href="php_Quizz_serie">Quizz 5</a>
                    <a href="php_Quizz_serie">Quizz 2</a>
                    <a href="php_Quizz_serie">Quizz 4</a>
                    <a href="php_Quizz_serie">Quizz 1</a>
                </div>
           ';
        }

        public function afficher_bienvenue(){
            echo '<p>Bienvenue sur mon site !</p>';
        }
    
        public function afficher_erreur(){
            echo '<p>Erreur !</p>';
        }
    }

?>