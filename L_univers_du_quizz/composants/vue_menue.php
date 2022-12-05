<?php

	class VueMenu{

		public $contenu;
		public $contenu2;

		public function __construct (){
			$this->contenu = 
			'<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
				<div class="container-fluid">
					<a class="navbar-brand" href="index.php?module=accueil" id="lienSite">
					 <img id="img_logoSite" src="img_acc.jpg" class="rounded-circle" alt="Logo Univers de quizz">
					</a>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<a id="nav_classement" href="index.php?module=classement">Classement</a> 
						<a href="index.php?module=cultureG">Culture Générele</a>  
						<a href="index.php?module=serie">Série</a> 
						<a href="index.php?module=film">Film</a> 
						<a href="index.php?module=japanimation">Japanimation</a>
						<a href="index.php?module=autres">Autres</a>
						<a href="index.php?module=creationQuizz&action=creation_quizz">Creation quizz</a>';

			$this->contenu .=	
						'<form class="d-flex">
							<input class="form-control me-2" id="moteurDeRecherche" type="search" value="" placeholder="Rechercher..." >
			 				<button class="btn btn-outline-success" type="submit">Chercher</button>
			 			</form>';

				if(!isset($_SESSION['pseudo'])){
					
					$this->contenu .= 
						'<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<div id="nav_dropdown" class="dropdown">
								<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
									Connecter
								</button>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a id="connexion" href=index.php?module=connexion&action=connexion>
										Connexion
									</a>
									<a id="inscription" href=index.php?module=connexion&action=inscription>
										Inscription
									</a>
								</div>
							</div>
						</ul>
					</div>
				</div>
			</nav>';
					
				} else{
					$this->contenu .= ' 
						<div>
							<a class="lienConnexion" id="Deconnexion" href=index.php?module=connexion&action=deconnexion>Déconnexion</a>
							<a href=index.php?module=profil>Profil</a>
						</div>';
				}
			
		}

	}
?>