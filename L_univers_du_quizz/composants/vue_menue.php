<?php

	class VueMenu{

		public $contenu;
		public $contenu2;

		public function __construct (){
			$this->contenu = '<a href="index.php?module=accueil" id="lienSite"><img id="img_logoSite" src="img_acc.jpg" alt="Logo Univers de quizz"></a>';

			$this->contenu .=	'<label id="moteurDeRecherche"> Recherche 
									<input name="saisieDeRecherche" >
								</label>';
				if(!isset($_SESSION['login'])){
					
					$this->contenu .= ' <a class="lienConnexion" id="connexion" href=index.php?module=connexion&action=connexion>Connexion</a><a href=index.php?module=connexion&action=inscription>Inscription</a></nav>';
					
				} else{
					$this->contenu .= ' <a class="lienConnexion" id="Deconnexion" href=index.php?module=connexion&action=deconnexion>Déconnexion</a>';
				}
			//$this->contenu2 = '<nav><a href="index.php?module=classement">Classement</a> - <a href="index.php?module=cultureG">Culture Générele</a> - <a href="index.php?module=serie">Série</a> - <a href="index.php?module=film">Film</a> - <a href="index.php?module=japanimation">Japanimation</a>';
		}

	}
?>