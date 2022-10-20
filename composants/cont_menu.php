<?php

	include_once 'vue_menue.php';
	

	class ContMenu {
		public $vue;
		
		public function __construct () {
			$this->vue = new VueMenu();
		}
		
	}

?>