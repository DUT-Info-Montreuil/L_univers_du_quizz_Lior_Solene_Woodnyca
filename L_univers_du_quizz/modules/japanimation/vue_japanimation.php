<?php

    require_once "vue_generique.php";
    class VueJapanimation extends VueGenerique{
        public function __construct () {
            parent::__construct();
        }

        public function afficher_titre(){
            echo '<h1>Japanimation :</h1>';
        }

        public function afficher_quizz(){
            echo '
            <section id="section_Quizz">
                <div id="Quizz_japanimation" class="quizz">
                    <h2>Quizz Japanimation </h2>
                    <a href="php_Quizz_japanimation">Quizz 5</a>
                    <a href="php_Quizz_japanimation">Quizz 2</a>
                    <a href="php_Quizz_japanimation">Quizz 4</a>
                    <a href="php_Quizz_japanimation">Quizz 1</a>
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