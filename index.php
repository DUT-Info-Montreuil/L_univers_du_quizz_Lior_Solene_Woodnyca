<!DOCTYPE HTML>
<HTML lang="fr">

	<head>
		<meta charset="UTF-8"/>
		<title>Univers de Quizz</title>
		<LINK href="style.css" rel="stylesheet" type="text/css">
 	</head>


    <body>
        <?php

        session_start();

        require_once "connexion.php";
        Connexion::initConnexion();

        if(isset($_GET['module'])){
            switch($_GET['module']){	
                case 'accueil': require_once "modules/accueil/mod_accueil.php";
                    $module = new ModAccueil();
                    break;
                case 'connexion': require_once "modules/mod_connexion/mod_connexion.php";
                    $module = new ModConnexion();
            }
        }
        else {
            
        }

        require_once "composants/comp_menu.php";
        $menu = new CompMenu();

        require_once "template.php";

        ?>

        

    </body>
</HTML>