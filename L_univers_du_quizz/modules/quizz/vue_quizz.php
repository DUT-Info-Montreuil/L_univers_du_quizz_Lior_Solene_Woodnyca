<?php

    require_once "vue_generique.php";
    class VueQuizz extends VueGenerique{
        

        public function __construct () {
            parent::__construct();
        }

        public function afficher_titre($nomQuizz){
            echo "<h1> $nomQuizz :</h1>";
        }

       
       public function afficher_questions($nbQuestion,$quizz){
            //echo $nbQuestion;
            for($i=0;$i<$nbQuestion;$i++){
                //var_dump($quizz[$i]);
                //echo htmlspecialchars($quizz[$i][1]) . "\n";
                echo $quizz[$i]['Question'];
                echo '<div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="a">
                    <label class="form-check-label" for="a">' . $quizz[$i][2] . '</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="b">
                    <label class="form-check-label" for="b">' . $quizz[$i][3] . '</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="c">
                    <label class="form-check-label" for="c">' . $quizz[$i][4] . '</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="d">
                    <label class="form-check-label" for="d">' . $quizz[$i][5] . '</label>
                </div>';
            }
            /*
            for($i=0;$i<$nbQuestion;$i++){
                for($j=1;$j<6;$j++){
                    echo htmlspecialchars($quizz[$i][$j]) . "  ";
                    echo ' - ';
                }
            }
            */
            //echo $quizz[0][0] . " ";
       }

        public function afficher_bienvenue(){
            echo '<p>Bienvenue sur mon site !</p>';
        }
    
        public function afficher_erreur(){
            echo '<p>Erreur !</p>';
        }
    }

?>