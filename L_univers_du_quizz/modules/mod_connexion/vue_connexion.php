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
				<p>Pseudo: <input type="text" name="pseudo" /></p>
				<p>Mot de passe: <input type="password" name="password" /></p>
				<p><input type="submit" value="Se connecter"></p>
			</form>
			<?php	
		}

		public function form_inscription(){
			?>
			<h1>Inscription:</h1>
			<form action="index.php?module=connexion&action=inscrire" method="post">
				<p>Pseudo: <input type="text" name="pseudo" /></p>
				<p>Mot de passe: <input type="password" name="password" /></p>
				<p>Confirmer mot de passe: <input type="password" name="passwordConfirm" /></p>
				<p><input type="submit" value="S'inscrire"></p>
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
			else{
				echo '<p>Erreur de connexion.</p>';
			}
		}

		public function resultat_inscription(){
			if(isset($_SESSION['pseudo'])){
				echo '<p>Vous êtes bien inscrit.e en tant que ' . $_SESSION['pseudo'] . '.</p>';
			}
			else{
				echo '<p>Erreur d\'inscription.</p>';
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
