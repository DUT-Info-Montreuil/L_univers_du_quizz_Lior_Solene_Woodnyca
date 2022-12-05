<?php

    require_once "vue_generique.php";
    class VueCultureG extends VueGenerique{
        public function __construct () {
            parent::__construct();
        }

        public function afficher_titre(){
            echo '<h1>Culture Générale :</h1>';
        }

        public function afficher_menu(){
           // echo '<nav> <a href="modules/classement/classement.php">Classement</a> <a href="modules/culture_g/culture_g.php">Culture Générale</a> <a href="modules/serie/serie.php">Série</a> <a href="modules/film/film.php">Film</a> <a href="modules/japanimation/japanimation.php">Japanimation</a> </nav>';
        }

        public function afficher_quizz(){
            echo '<section id="section_Quizz">
                <div id="Quizz_culture_g" class="quizz">
                    <h2>Quizz Culture Générale </h2>
                    <a href="index.php?module=quizz&nomQuizz=Quizz+Ubuntu&idQuizz=2">Quizz Ubuntu</a>
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