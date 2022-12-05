<?php

    require_once "vue_generique.php";
    class VueSerie extends VueGenerique{
        public function __construct () {
            parent::__construct();
        }

        public function afficher_titre(){
            echo '<h1>Série  :</h1>';
        }

        public function afficher_quizz(){
            echo '
            <section id="section_Quizz">
                <div id="Quizz_serie" class="quizz">
                    <h2>Quizz Série </h2>
                   <a href="index.php?module=quizz&nomQuizz=Quizz+Friends&idQuizz=7">Quizz Friends</a>
                    <a href="index.php?module=quizz&nomQuizz=Quizz+Friends+2&idQuizz=8">Quizz Friends 2</a>
                    <a href="index.php?module=quizz&nomQuizz=quizz+vampire+diaries+1&idQuizz=9">Quizz vampire diaries 1</a>
                    <a href="index.php?module=quizz&nomQuizz=quizz+vampire+diaries+2&idQuizz=10">Quizz vampire diaries 2</a>
                    <a href="index.php?module=quizz&nomQuizz=quizz+vampire+diaries+3&idQuizz=11">Quizz vampire diaries 3</a>
                    <a href="index.php?module=quizz&nomQuizz=quizz+vampire+diaries+4&idQuizz=12">Quizz vampire diaries 4</a>
                    <a href="index.php?module=quizz&nomQuizz=quizz+vampire+diaries+5&idQuizz=13">Quizz vampire diaries 5</a>



                </div>
            </section>';
        }
            
        public function afficher_erreur(){
            echo '<p>Erreur !</p>';
        }
    }

?>