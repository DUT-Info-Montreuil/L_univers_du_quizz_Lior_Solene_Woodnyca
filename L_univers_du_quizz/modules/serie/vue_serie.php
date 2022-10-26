<?php

    require_once "vue_generique.php";
    class VueSerie extends VueGenerique{
        public function __construct () {
            parent::__construct();
        }

        public function afficher_titre(){
            echo '<h1>Série  :</h1>';
        }

        public function afficher_menu(){
           // echo '<nav> <a href="modules/classement/classement.php">Classement</a> <a href="modules/culture_g/culture_g.php">Culture Générale</a> <a href="modules/serie/serie.php">Série</a> <a href="modules/film/film.php">Film</a> <a href="modules/japanimation/japanimation.php">Japanimation</a> </nav>';
        }

        public function afficher_quizz(){
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