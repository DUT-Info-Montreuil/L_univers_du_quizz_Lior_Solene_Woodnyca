<?php

    require_once "vue_generique.php";
    class VueAutres extends VueGenerique{
        public function __construct () {
            parent::__construct();
        }

        public function afficher_titre(){
            echo '<h1>Autres :</h1>';
        }

        public function afficher_menu(){
         
        }

        public function afficher_quizz(){
            echo '<section id="section_Quizz">
                <div id="Quizz_film" class="quizz">
                    <h2>Quizz Autres </h2>
                    <a href="index.php?module=quizz&nomQuizz=quizz&idQuizz=1">Quizz</a>
                    <a href="php_Quizz_film">Quizz 5</a>
                    <a href="php_Quizz_film">Quizz 2</a>
                    <a href="php_Quizz_film">Quizz 4</a>
                    <a href="php_Quizz_film">Quizz 1</a>
                </div>
            </section>';
        }

        public function afficher_erreur(){
            echo '<p>Erreur !</p>';
        }
    }

?>