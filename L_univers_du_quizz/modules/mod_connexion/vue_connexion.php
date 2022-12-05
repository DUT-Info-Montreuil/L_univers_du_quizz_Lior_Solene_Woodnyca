<?php

	require_once"vue_generique.php";

	class VueConnexion extends VueGenerique{

		public function __construct () {
			parent::__construct();
		}


		public function form_connexion(){
			?>
			<h1>Connexion:</h1>
			<form action="index.php?module=connexion&action=connecter" method="post">
				<div class="mb-3">
					<label for="login" class="form-label">Pseudo</label>

					<input type="login" class="form-control" id="login" aria-describedby="emailHelp" name="pseudo" value=<?php if(isset($_POST["pseudo"])) { echo $_POST['pseudo'];}?>>
				</div>

				<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Mot de passe</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="password">
				</div>

				<button type="submit" class="btn btn-secondary">Se connecter</button>
				
			</form>
			<?php	
		}

		public function form_inscription(){
			?>
			<h1>Inscription:</h1>
			<form action="index.php?module=connexion&action=inscrire" method="post">

				<div class="mb-3">
						<label for="login" class="form-label">Pseudo</label>
						<input type="login" class="form-control" id="login" aria-describedby="emailHelp" name="pseudo" value=<?php if(isset($_POST["pseudo"])) { echo $_POST['pseudo'];}?>>
				</div>

				<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Mail</label>
						<input type="email" class="form-control" id="exampleInputPassword1" name="email" value=<?php if(isset($_POST["mail"])) { echo $_POST['mail'];}?>>
				</div>

				<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Mot de passe</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="password">
				</div>

				<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Confirmer mot de passe</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="passwordConfirm">
				</div>
				
				
				<button type="submit" class="btn btn-secondary">S'inscrire</button>
				
			</form>
			<?php	
		}

		public function pseudoDejaPris(){
			echo "<p>Ce pseudo est déjà utilisé par un autre utilisateur.</p>";
		}

		public function resultat_connexion(){
			if(isset($_SESSION['pseudo'])){
				echo '<p>Vous êtes bien connecté.e en tant que ' . $_SESSION['pseudo'] . '.</p>';
			}
			
		}

		public function resultat_inscription(){
			if(isset($_SESSION['pseudo'])){
				echo '<p>Vous êtes bien inscrit.e en tant que ' . $_SESSION['pseudo'] . '.</p>';
			}
			
		}

		public function dejaConnecte(){
			echo '<p>Vous êtes déjà connecté.e en tant que ' . $_SESSION['pseudo'] . '.</p>';	
		}

		public function deconnexion(){
			echo "<p>Vous êtes maintenant déconnecté.e.</p>";
		}

		public function afficher_erreur(){
			echo '<p>Erreur !</p>';
		}
	}



?>
