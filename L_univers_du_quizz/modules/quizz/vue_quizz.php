<?php

    require_once "vue_generique.php";
    class VueQuizz extends VueGenerique{


        public function __construct () {
            parent::__construct();
        }

        public function afficher_titre($nomQuizz){
            echo "<h1> $nomQuizz :</h1>";
        }


       public function afficher_questions($nbQuestion,$quizz, $nomQuizz){
        
        
            for($i=0;$i<$nbQuestion;$i++){
                echo $quizz[$i]['Question'];
?>

                <form action="index.php?module=quizz&nomQuizz=<?php echo $nomQuizz;?>&idQuizz=<?php echo $quizz[0]["idQuizz"]; ?>&action=fin_quizz" method="post">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="<?php echo 'reponse' . $i .'[]'; ?>" id="a">
                        <label class="form-check-label" for="a"> <?php echo $quizz[$i][2]; ?> </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="2" id="b" name="<?php echo 'reponse' . $i .'[]'; ?>">
                        <label class="form-check-label" for="b"> <?php echo $quizz[$i][3]; ?> </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="3" id="c" name="<?php echo 'reponse' . $i .'[]'; ?>">
                        <label class="form-check-label" for="c"> <?php echo $quizz[$i][4]; ?> </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="4" id="d" name="<?php echo 'reponse' . $i .'[]'; ?>">
                        <label class="form-check-label" for="d"> <?php echo $quizz[$i][5]; ?></label>
                    </div>  
                    
 <?php               
            }

            echo '
                    <button type="submit" class="btn btn-secondary" name="btn_fin">
                               Fin du quizz
                    </button>

                </form>';
           
       }

        public function vue_fin_quizz($score, $nb_question) {

            echo'Votre score final est de ' . $score . '/' . $nb_question;
        }

        public function afficher_erreur(){
            echo '<p>Erreur !</p>';
        }
    }

?>