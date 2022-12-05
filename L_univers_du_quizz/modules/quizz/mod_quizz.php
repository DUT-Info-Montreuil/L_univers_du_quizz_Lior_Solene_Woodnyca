<?php
    require_once "controleur_quizz.php";
	class ModQuizz{

		public $affichage;

		public function __construct(){

			$controleur = new controleurQuizz();	

			/*if(isset($_POST['btn_fin'])) {

			}*/

			if(isset($_GET['action'])) {
				switch ($_GET['action']) {
					case 'fin_quizz': $controleur->verif_bonne_reponse();
						break;
					
					default:
						// code...
						break;
				}
			}
			else {
				$controleur->menu();
			}


			$this->affichage = $controleur->vue->getAffichage();
		}
	}

?>