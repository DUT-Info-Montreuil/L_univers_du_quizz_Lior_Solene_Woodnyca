<?php

	class VueMenu{

		public $contenu;

		public function __construct (){
			$this->contenu = '<nav><a href="index.php?module=accueil">Accueil</a>';
				if(!isset($_SESSION['login'])){
					
					$this->contenu .= " <a href=index.php?module=connexion&action=connexion>Connexion</a> - <a href=index.php?module=connexion&action=inscription>Inscription</a></nav>";
					
				} else{
					$this->contenu .= " <a href=index.php?module=connexion&action=deconnexion>Déconnexion</a></nav>";
				}
		}

	}
?>