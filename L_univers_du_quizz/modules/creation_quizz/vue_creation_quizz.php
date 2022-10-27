<?php

    require_once "vue_generique.php";
    class VueCreationQuizz extends VueGenerique{
        public function __construct () {
            parent::__construct();
        }

        public function afficher_titre(){
            echo '<h1>Creation de Quizz :</h1>';
            echo '<p> Un quizz doit avoir 10 questions différentes, chaque question peuvent avoir 2 à 4 réponse proposer.</p>';
        }

        public function creation_quizz(){
            ?>
                <form action="index.php?module=joueurs&action=ajouter" method="post">
                    <p>Nom du quizz : <input type="text" name="nomQuizz" /></p>
                    <div>
                        <label for="niveau_quizz">Quel est le niveau de difficulté du quizz ?</label>
                        <select name="niveau" id="niveau_quizz">
                        <option value="">choisir un niveau de difficulté</option>
                        <option value="1">Niveau 1</option>
                        <option value="2">Niveau 2</option>
                        <option value="3">Niveau 3</option>   
                    </div>
                    <p><input type="submit" value="Ajouter"></p>
                </form>
            <?php
        }

       public function creation_question_1(){
            ?>
                <h2> Question 1 : </h2>
                <form action="index.php?module=joueurs&action=ajouter" method="post">
                    <div>
                        <p>Question : <input type="text" name="question1" /></p>
                        <p>Réponse 1 : <textarea name="reponse1"></textarea></p>
                        <p>Réponse 2 : <textarea name="reponse2"></textarea></p>
                        <p>Réponse 3 : <textarea name="reponse3"></textarea></p>
                        <p>Réponse 4 : <textarea name="reponse4"></textarea></p>
                    </div>
                    <div>
                        <p>Quel la (ou les 2) bonne.s réponse.s ?</p>
                        <div>
                            <input type="checkbox" id="reponse1" name="reponse1">
                            <label for="reponse1">Réponse 1</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse2" name="reponse2">
                            <label for="reponse2">Réponse 2</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse3" name="reponse3">
                            <label for="reponse3">Réponse 3</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse4" name="reponse4">
                            <label for="reponse4">Réponse 4</label>
                        </div>
                    </div>
                    <p><input type="submit" value="Ajouter"></p>
                </form>
            <?php
       }

       public function creation_question_2(){
            ?>
                <h2> Question 2 : </h2>
                <form action="index.php?module=joueurs&action=ajouter" method="post">
                    <div>
                        <p>Question : <input type="text" name="question2" /></p>
                        <p>Réponse 1 : <textarea name="reponse1"></textarea></p>
                        <p>Réponse 2 : <textarea name="reponse2"></textarea></p>
                        <p>Réponse 3 : <textarea name="reponse3"></textarea></p>
                        <p>Réponse 4 : <textarea name="reponse4"></textarea></p>
                    </div>
                    <div>
                        <p>Quel la (ou les 2) bonne.s réponse.s ?</p>
                        <div>
                            <input type="checkbox" id="reponse1" name="reponse1">
                            <label for="reponse1">Réponse 1</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse2" name="reponse2">
                            <label for="reponse2">Réponse 2</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse3" name="reponse3">
                            <label for="reponse3">Réponse 3</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse4" name="reponse4">
                            <label for="reponse4">Réponse 4</label>
                        </div>
                    </div>
                    <p><input type="submit" value="Ajouter"></p>
                </form>
            <?php
       }

       public function creation_question_3(){
            ?>
                <h2> Question 3 : </h2>
                <form action="index.php?module=joueurs&action=ajouter" method="post">
                    <div>
                        <p>Question : <input type="text" name="question3" /></p>
                        <p>Réponse 1 : <textarea name="reponse1"></textarea></p>
                        <p>Réponse 2 : <textarea name="reponse2"></textarea></p>
                        <p>Réponse 3 : <textarea name="reponse3"></textarea></p>
                        <p>Réponse 4 : <textarea name="reponse4"></textarea></p>
                    </div>
                    <div>
                        <p>Quel la (ou les 2) bonne.s réponse.s ?</p>
                        <div>
                            <input type="checkbox" id="reponse1" name="reponse1">
                            <label for="reponse1">Réponse 1</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse2" name="reponse2">
                            <label for="reponse2">Réponse 2</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse3" name="reponse3">
                            <label for="reponse3">Réponse 3</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse4" name="reponse4">
                            <label for="reponse4">Réponse 4</label>
                        </div>
                    </div>
                    <p><input type="submit" value="Ajouter"></p>
                </form>
            <?php
       }

       public function creation_question_4(){
            ?>
                <h2> Question 4 : </h2>
                <form action="index.php?module=joueurs&action=ajouter" method="post">
                    <div>
                        <p>Question : <input type="text" name="question4" /></p>
                        <p>Réponse 1 : <textarea name="reponse1"></textarea></p>
                        <p>Réponse 2 : <textarea name="reponse2"></textarea></p>
                        <p>Réponse 3 : <textarea name="reponse3"></textarea></p>
                        <p>Réponse 4 : <textarea name="reponse4"></textarea></p>
                    </div>
                    <div>
                        <p>Quel la (ou les 2) bonne.s réponse.s ?</p>
                        <div>
                            <input type="checkbox" id="reponse1" name="reponse1">
                            <label for="reponse1">Réponse 1</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse2" name="reponse2">
                            <label for="reponse2">Réponse 2</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse3" name="reponse3">
                            <label for="reponse3">Réponse 3</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse4" name="reponse4">
                            <label for="reponse4">Réponse 4</label>
                        </div>
                    </div>
                    <p><input type="submit" value="Ajouter"></p>
                </form>
            <?php
       }

       public function creation_question_5(){
            ?>
                <h2> Question 5 : </h2>
                <form action="index.php?module=joueurs&action=ajouter" method="post">
                    <div>
                        <p>Question : <input type="text" name="question5" /></p>
                        <p>Réponse 1 : <textarea name="reponse1"></textarea></p>
                        <p>Réponse 2 : <textarea name="reponse2"></textarea></p>
                        <p>Réponse 3 : <textarea name="reponse3"></textarea></p>
                        <p>Réponse 4 : <textarea name="reponse4"></textarea></p>
                    </div>
                    <div>
                        <p>Quel la (ou les 2) bonne.s réponse.s ?</p>
                        <div>
                            <input type="checkbox" id="reponse1" name="reponse1">
                            <label for="reponse1">Réponse 1</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse2" name="reponse2">
                            <label for="reponse2">Réponse 2</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse3" name="reponse3">
                            <label for="reponse3">Réponse 3</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse4" name="reponse4">
                            <label for="reponse4">Réponse 4</label>
                        </div>
                    </div>
                    <p><input type="submit" value="Ajouter"></p>
                </form>
            <?php
       }

       public function creation_question_6(){
            ?>
                <h2> Question 6 : </h2>
                <form action="index.php?module=joueurs&action=ajouter" method="post">
                    <div>
                        <p>Question : <input type="text" name="question6" /></p>
                        <p>Réponse 1 : <textarea name="reponse1"></textarea></p>
                        <p>Réponse 2 : <textarea name="reponse2"></textarea></p>
                        <p>Réponse 3 : <textarea name="reponse3"></textarea></p>
                        <p>Réponse 4 : <textarea name="reponse4"></textarea></p>
                    </div>
                    <div>
                        <p>Quel la (ou les 2) bonne.s réponse.s ?</p>
                        <div>
                            <input type="checkbox" id="reponse1" name="reponse1">
                            <label for="reponse1">Réponse 1</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse2" name="reponse2">
                            <label for="reponse2">Réponse 2</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse3" name="reponse3">
                            <label for="reponse3">Réponse 3</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse4" name="reponse4">
                            <label for="reponse4">Réponse 4</label>
                        </div>
                    </div>
                    <p><input type="submit" value="Ajouter"></p>
                </form>
            <?php
       }

       public function creation_question_7(){
            ?>
                <h2> Question 7 : </h2>
                <form action="index.php?module=joueurs&action=ajouter" method="post">
                    <div>
                        <p>Question : <input type="text" name="question7" /></p>
                        <p>Réponse 1 : <textarea name="reponse1"></textarea></p>
                        <p>Réponse 2 : <textarea name="reponse2"></textarea></p>
                        <p>Réponse 3 : <textarea name="reponse3"></textarea></p>
                        <p>Réponse 4 : <textarea name="reponse4"></textarea></p>
                    </div>
                    <div>
                        <p>Quel la (ou les 2) bonne.s réponse.s ?</p>
                        <div>
                            <input type="checkbox" id="reponse1" name="reponse1">
                            <label for="reponse1">Réponse 1</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse2" name="reponse2">
                            <label for="reponse2">Réponse 2</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse3" name="reponse3">
                            <label for="reponse3">Réponse 3</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse4" name="reponse4">
                            <label for="reponse4">Réponse 4</label>
                        </div>
                    </div>
                    <p><input type="submit" value="Ajouter"></p>
                </form>
            <?php
       }

       public function creation_question_8(){
            ?>
                <h2> Question 8 : </h2>
                <form action="index.php?module=joueurs&action=ajouter" method="post">
                    <div>
                        <p>Question : <input type="text" name="question8" /></p>
                        <p>Réponse 1 : <textarea name="reponse1"></textarea></p>
                        <p>Réponse 2 : <textarea name="reponse2"></textarea></p>
                        <p>Réponse 3 : <textarea name="reponse3"></textarea></p>
                        <p>Réponse 4 : <textarea name="reponse4"></textarea></p>
                    </div>
                    <div>
                        <p>Quel la (ou les 2) bonne.s réponse.s ?</p>
                        <div>
                            <input type="checkbox" id="reponse1" name="reponse1">
                            <label for="reponse1">Réponse 1</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse2" name="reponse2">
                            <label for="reponse2">Réponse 2</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse3" name="reponse3">
                            <label for="reponse3">Réponse 3</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse4" name="reponse4">
                            <label for="reponse4">Réponse 4</label>
                        </div>
                    </div>
                    <p><input type="submit" value="Ajouter"></p>
                </form>
            <?php
       }

       public function creation_question_9(){
            ?>
                <h2> Question 9 : </h2>
                <form action="index.php?module=joueurs&action=ajouter" method="post">
                    <div>
                        <p>Question : <input type="text" name="question9" /></p>
                        <p>Réponse 1 : <textarea name="reponse1"></textarea></p>
                        <p>Réponse 2 : <textarea name="reponse2"></textarea></p>
                        <p>Réponse 3 : <textarea name="reponse3"></textarea></p>
                        <p>Réponse 4 : <textarea name="reponse4"></textarea></p>
                    </div>
                    <div>
                        <p>Quel la (ou les 2) bonne.s réponse.s ?</p>
                        <div>
                            <input type="checkbox" id="reponse1" name="reponse1">
                            <label for="reponse1">Réponse 1</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse2" name="reponse2">
                            <label for="reponse2">Réponse 2</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse3" name="reponse3">
                            <label for="reponse3">Réponse 3</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse4" name="reponse4">
                            <label for="reponse4">Réponse 4</label>
                        </div>
                    </div>
                    <p><input type="submit" value="Ajouter"></p>
                </form>
            <?php
       }

       public function creation_question_10(){
            ?>
                <h2> Question 10 : </h2>
                <form action="index.php?module=joueurs&action=ajouter" method="post">
                    <div>
                        <p>Question : <input type="text" name="question10" /></p>
                        <p>Réponse 1 : <textarea name="reponse1"></textarea></p>
                        <p>Réponse 2 : <textarea name="reponse2"></textarea></p>
                        <p>Réponse 3 : <textarea name="reponse3"></textarea></p>
                        <p>Réponse 4 : <textarea name="reponse4"></textarea></p>
                    </div>
                    <div>
                        <p>Quel la (ou les 2) bonne.s réponse.s ?</p>
                        <div>
                            <input type="checkbox" id="reponse1" name="reponse1">
                            <label for="reponse1">Réponse 1</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse2" name="reponse2">
                            <label for="reponse2">Réponse 2</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse3" name="reponse3">
                            <label for="reponse3">Réponse 3</label>
                        </div>
                        <div>
                            <input type="checkbox" id="reponse4" name="reponse4">
                            <label for="reponse4">Réponse 4</label>
                        </div>
                    </div>
                    <p><input type="submit" value="Ajouter"></p>
                </form>
            <?php
       }
    
        public function afficher_erreur(){
            echo '<p>Erreur !</p>';
        }
    }

?>