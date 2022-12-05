<?php

    require_once "vue_generique.php";
    class VueFilm extends VueGenerique{
        public function __construct () {
            parent::__construct();
        }

        public function afficher_titre(){
            echo '<h1>Film :</h1>';
        }

        public function afficher_menu(){
           // echo '<nav> <a href="modules/classement/classement.php">Classement</a> <a href="modules/culture_g/culture_g.php">Culture Générale</a> <a href="modules/serie/serie.php">Série</a> <a href="modules/film/film.php">Film</a> <a href="modules/japanimation/japanimation.php">Japanimation</a> </nav>';
        }

        public function afficher_quizz(){
            echo '<section id="section_Quizz">
                <div id="Quizz_film" class="quizz">
                    <h2>Quizz Film </h2>
                    <a href="index.php?module=quizz&nomQuizz=Quizz+Marvel&idQuizz=1">Quizz Marvel</a>
                </div>
            </section>';
        }

        public function afficher_bienvenue(){
            echo '<p>Bienvenue sur mon site !</p>';
        }
    
        public function afficher_erreur(){
            echo '<p>Erreur !</p>';
        }
    }

?>