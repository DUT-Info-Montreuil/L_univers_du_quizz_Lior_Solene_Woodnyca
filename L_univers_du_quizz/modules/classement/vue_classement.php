<?php

    require_once "vue_generique.php";
    class VueClassement extends VueGenerique{
        public function __construct () {
            parent::__construct();
        }

        public function afficher_titre(){
            echo '<h1>Classement :</h1>';
        }

        public function afficher_menu(){
           // echo '<nav> <a href="modules/classement/classement.php">Classement</a> <a href="modules/culture_g/culture_g.php">Culture Générale</a> <a href="modules/serie/serie.php">Série</a> <a href="modules/film/film.php">Film</a> <a href="modules/japanimation/japanimation.php">Japanimation</a> </nav>';
        }

        public function afficher_bienvenue(){
            echo '<p>Bienvenue sur mon site !</p>';
        }
    
        public function afficher_classements() {
            echo '
            <section id="section_Quizz">
                <div id="Classement_g" class="classement">
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
                </div>

                <div id="Classement_culture_g" class="classement">
                    <h2>Classement Culture Generale </h2>
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

                        <li>
                            <a href=# > joueur 1</a>
                        </li>

                    </ul>

                </div>

                <div id="Classement_série" class="classement">
                    <h2>Classement Série </h2>
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

                        <li>
                            <a href=# > joueur 1</a>
                        </li>

                    </ul>

                </div>

                <div id="Classement_film" class="classement">
                    <h2>Classement Film </h2>
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

                        <li>
                            <a href=# > joueur 1</a>
                        </li>

                    </ul>

                </div>

                <div id="Classement_japanimation" class="classement">
                    <h2>Classement Japanimation </h2>
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

                        <li>
                            <a href=# > joueur 1</a>
                        </li>

                    </ul>

                </div>

            </section>';

        }
        
        public function afficher_erreur(){
            echo '<p>Erreur !</p>';
        }
    }

?>