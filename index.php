<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Accueil</title>
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

        require_once "composants/comp_menu.php";
        $menu = new CompMenu();

        require_once "template.php";

        ?>
    </body>
</html>