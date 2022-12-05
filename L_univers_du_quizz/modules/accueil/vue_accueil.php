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
                   <a href="index.php?module=classement"> <h2>Classement Thème Générale </h2> </a>
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

                        <li>
                            <a href=# > joueur 1</a>
                        </li>

                    </ul>
                </div>';
        }

        public function afficher_quizz_theme_x(){
            echo '
            
                <div id="Quizz_theme_X" class="quizz">
                    <a href=# > <h2>Quizz Theme x</h2> </a>
                    <a href="php_QuizzTheme_x">Quizz 5</a>
                    <a href="php_QuizzTheme_x">Quizz 2</a>
                    <a href="php_QuizzTheme_x">Quizz 4</a>
                    <a href="php_QuizzTheme_x">Quizz 1</a>
                </div>';
        }

        public function afficher_quizz_autres(){
            echo '
           
                <div id="Quizz_autres" class="quizz">
                    <a href="index.php?module=autres"> <h2>Quizz Autres</h2> </a>
                    <a href="php_QuizzAutres1">Quizz 1</a>
                    <a href="php_QuizzAutres2">Quizz 2</a>
                    <a href="php_QuizzAutres3">Quizz 3</a>
                    <a href="php_QuizzAutres4">Quizz 4</a>
                    <a href="php_QuizzAutres5">Quizz 5</a>
                </div>
            ';
        }

        public function afficher_quizz_culture_g(){
            echo '
            
                <div id="Quizz_culture_g" class="quizz">
                     <a href="index.php?module=cultureG"> <h2>Quizz Culture Générale </h2> </a>
                    
                    <a href="index.php?module=quizz&nomQuizz=Quizz+Ubuntu&idQuizz=2">Quizz Ubuntu</a>
                </div>';
        }

        public function afficher_quizz_film(){
            echo '
                <div id="Quizz_film" class="quizz">
                    <a href="index.php?module=film"> <h2>Quizz Film </h2> </a>
                    
                    <a href="index.php?module=quizz&nomQuizz=Quizz+Marvel&idQuizz=1">Quizz Marvel</a>
                </div>
           ';
        }

        public function afficher_quizz_japanimation(){
            echo '
           
                <div id="Quizz_japanimation" class="quizz">
                    <a href="index.php?module=japanimation"> <h2>Quizz Japanimation </h2> </a>
                    
                    <a href="index.php?module=quizz&nomQuizz=Quizz+One+Piece&idQuizz=3">Quizz One Piece</a> </br>
                    <a href="index.php?module=quizz&nomQuizz=Quizz+Personnages+One+Piece&idQuizz=4">Quizz Personnages One Piece</a> </br>
                    <a href="index.php?module=quizz&nomQuizz=Quizz+Fruit+du+Demon&idQuizz=5">Quizz Fruit du Démon</a> </br>
                    <a href="index.php?module=quizz&nomQuizz=Quizz+One+Piece+2&idQuizz=6">Quizz One Piece 2</a> </br>
                    <a href="index.php?module=quizz&nomQuizz=Quizz+Dragon+Ball&idQuizz=14">Quizz Dragon Ball</a> </br>
                </div>';
        }

        public function afficher_quizz_serie(){
            echo '
                <div id="Quizz_serie" class="quizz">
                    <a href="index.php?module=serie"> <h2>Quizz Série </h2> </a>
                    <a href="index.php?module=quizz&nomQuizz=Quizz+Friends&idQuizz=7">Quizz Friends</a>
                    <a href="index.php?module=quizz&nomQuizz=Quizz+Friends+2&idQuizz=8">Quizz Friends 2</a>
                    <a href="index.php?module=quizz&nomQuizz=quizz+vampire+diaries+1&idQuizz=9">Quizz vampire diaries 1</a>
                    <a href="index.php?module=quizz&nomQuizz=quizz+vampire+diaries+2&idQuizz=10">Quizz vampire diaries 2</a>
                    <a href="index.php?module=quizz&nomQuizz=quizz+vampire+diaries+3&idQuizz=11">Quizz vampire diaries 3</a>
                    <a href="index.php?module=quizz&nomQuizz=quizz+vampire+diaries+4&idQuizz=12">Quizz vampire diaries 4</a>
                    <a href="index.php?module=quizz&nomQuizz=quizz+vampire+diaries+5&idQuizz=13">Quizz vampire diaries 5</a>
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