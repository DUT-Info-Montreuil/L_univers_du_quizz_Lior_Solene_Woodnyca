<?php

    require_once "vue_generique.php";
    class VueJapanimation extends VueGenerique{
        public function __construct () {
            parent::__construct();
        }

        public function afficher_titre(){
            echo '<h1>Japanimation :</h1>';
        }

        public function afficher_menu(){
           // echo '<nav> <a href="modules/classement/classement.php">Classement</a> <a href="modules/culture_g/culture_g.php">Culture Générale</a> <a href="modules/serie/serie.php">Série</a> <a href="modules/film/film.php">Film</a> <a href="modules/japanimation/japanimation.php">Japanimation</a> </nav>';
        }

        public function afficher_quizz(){
            echo '<section id="section_Quizz">
                <div id="Quizz_japanimation" class="quizz">
                    <h2>Quizz Japanimation </h2>
                    <a href="index.php?module=quizz&nomQuizz=Quizz+One+Piece&idQuizz=3">Quizz One Piece</a>
                    <a href="index.php?module=quizz&nomQuizz=Quizz+Personnages+One+Piece&idQuizz=4">Quizz Personnages One Piece</a>
                    <a href="index.php?module=quizz&nomQuizz=Quizz+Fruit+du+Demon&idQuizz=5">Quizz Fruit du Démon</a>
                    <a href="index.php?module=quizz&nomQuizz=Quizz+One+Piece+2&idQuizz=6">Quizz One Piece 2</a>
                    <a href="index.php?module=quizz&nomQuizz=Quizz+Dragon+Ball&idQuizz=14">Quizz Dragon Ball</a>
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