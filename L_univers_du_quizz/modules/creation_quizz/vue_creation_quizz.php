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
                
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nom du quizz</label>
                    <input type="text" class="form-control" id="nomQuizz" placeholder="Nom du quizz" name="nomQuizz">
                </div>

                <div>
                    <label for="niveau_quizz">Quel est le niveau de difficulté du quizz ?</label>
                    
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>choisir un niveau de difficulté</option>
                        <option value="1">Niveau 1</option>
                        <option value="2">Niveau 2</option>
                        <option value="3">Niveau 3</option> 
                    </select>
                </div>
                <button type="submit" class="btn btn-secondary"><a href="index.php?module=creationQuestion">Création de quizz</a></button>
                
            <?php
        }
        
    
        public function afficher_erreur(){
            echo '<p>Erreur !</p>';
        }
    }

?>