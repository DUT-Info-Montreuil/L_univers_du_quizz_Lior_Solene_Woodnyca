<?php

    require_once "vue_generique.php";
    class VueCreationQuizz extends VueGenerique{
        public function __construct () {
            parent::__construct();
        }

        public function afficher_titre(){
            echo '<h1>Creation de Quizz :</h1>';
            
        }

        public function affichage_creation_quizz($theme){

?>
                <p> Un quizz doit avoir 10 questions différentes, chaque question peuvent avoir 2 à 4 réponse proposer.</p>

            
                <form action="index.php?module=creationQuizz&action=ajouter" method="post">
                
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nom du quizz</label>
                        <input type="text" class="form-control" id="nomQuizz" placeholder="Nom du quizz" name="nomQuizz" value=<?php if(isset($_POST["nomQuizz"])) { echo $_POST['nomQuizz'];}?>>
                    </div>

                    <div>
                        <label for="niveau_quizz">Quel est le niveau de difficulté du quizz ?</label>
                        
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="niveau_quizz">
                            <option selected>choisir un niveau de difficulté</option>
                            <option value="1">Niveau 1</option>
                            <option value="2">Niveau 2</option>
                            <option value="3">Niveau 3</option> 
                        </select>
                    </div>

                    <div>
                        <label for="theme">Quel est le theme du quizz ?</label>

                        <select name="theme" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>choisir un theme </option>

                            <?php   foreach ($theme as $Themenom) {?>
                                    <option value='<?php echo $Themenom["nomTheme"] ?>'><?php echo$Themenom["nomTheme"]?> </option>
                                   <?php } ?>
                            
                        </select>
                    </div>

                    <button type="submit" class="btn btn-secondary">
                        Création de quizz
                    </button>
                </form>
<?php  

        }
        
        public function requete_reussi($result) {  
            if($result== 1) {
                echo 'Le quizz a bien été creer !';
            }
            
        }

        public function afficher_erreur(){
            echo '<p>Erreur !</p>';
        }
    }

?>