<?php

	class ModAccueil{
		
		public $affichage;

		public function __construct(){
			require_once "controleur_accueil.php";
			$controleur = new controleurAccueil();

			$controleur->menu();

			switch($controleur->get_action()){
				case "classement":
					break;
				case "cultureG":
					break;
				case "serie":
					break;
				case "film":
					break;
				case "japanimation":
					break;
				default: $controleur->erreur();
			}


			$this->affichage = $controleur->vue->getAffichage();
		}
	}
		
?>
