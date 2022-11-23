<?php

    require_once "vue_generique.php";
    class VueCreationQuestion extends VueGenerique{
        public function __construct () {
            parent::__construct();
        }

      

    
        public function creation_question($nb_question){
            echo '<h2> Question : </h2>
                <form action="index.php?module=joueurs&action=ajouter" method="post">
                    <div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Question</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Question" name="question" id="question">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Réponse 1</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Réponse 1" name="reponse1" id="reponse1">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Réponse 2</label>
                            <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Réponse 2" name="reponse2" id="reponse2">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Réponse 3</label>
                            <input type="text" class="form-control" id="formGroupExampleInput4" placeholder="Réponse 3" name="reponse3" id="reponse3">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Réponse 4</label>
                            <input type="text" class="form-control" id="formGroupExampleInput5" placeholder="Réponse 4" name="reponse4" id="reponse4">
                        </div>
                    </div>
                    <div>
                        <p>Quel la (ou les 2) bonne.s réponse.s ?</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="reponse1" name="reponse1">
                            <label class="form-check-label" for="reponse1">Réponse 1</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="reponse2" name="reponse2">
                            <label class="form-check-label" for="reponse2">Réponse 2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="reponse3" name="reponse3">
                            <label class="form-check-label" for="reponse3">Réponse 3</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="reponse4" name="reponse4">
                            <label class="form-check-label" for="reponse4">Réponse 4</label>
                        </div>
                    </div>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-secondary"><a href="index.php?module=creationQuestion"> Ajoute une autre question </a></button>
                        <button type="button" class="btn btn-outline-secondary"><a href="index.php?module=creationQuizz"> Terminer la creation du quizz </a></button>
                    </div>
                </form>';
       }
       
    
        public function afficher_erreur(){
            echo '<p>Erreur !</p>';
        }
    }

?>