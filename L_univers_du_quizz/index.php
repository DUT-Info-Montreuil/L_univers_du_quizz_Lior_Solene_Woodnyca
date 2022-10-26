<!DOCTYPE html>
<HTML lang="fr">

    <head>
        <meta charset="UTF-8"/>
        <title>Univers de Quizz</title>
		<!--<LINK href="style.css" rel="stylesheet" type="text/css">-->
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
                    break;
                case "classement": require_once "modules/classement/mod_classement.php";
                    $module = new ModClassement();
                    break;
                case "cultureG": require_once "modules/culture_g/mod_culture_g.php";
                    $module = new ModCultureG();
                    break;
                case "serie": require_once "modules/serie/mod_serie.php";
                    $module = new ModSerie();
                    break;
                case "film": require_once "modules/film/mod_film.php";
                    $module = new ModFilm();
                    break;
                case "japanimation": require_once "modules/japanimation/mod_japanimation.php";
                    $module = new ModJapanimation();
                    break;
            }
        }

        require_once "composants/comp_menu.php";
        $menu = new CompMenu();

        require_once "template.php";

        ?>
    </body>
</html>