<?php

	include_once 'cont_menu.php';
	class CompMenu{

		public $controleur_menu;

		public function __construct () {
			$this->controleur_menu = new ContMenu();
		}

		public function affiche(){
			echo $this->controleur_menu->vue->contenu;
			echo $this->controleur_menu->vue->contenu2;
		}

	}

?>