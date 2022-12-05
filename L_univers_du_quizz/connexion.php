<?php

	class Connexion	{
		
	protected static $bdd;
        
        public static function initConnexion(){
            $user = 'dutinfopw201634';
            $password = 'sahedyja';

           // self::$bdd=new PDO('mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw201634',$user,$password);

                self::$bdd = new PDO('mysql:dbname=bdd;host:localhost;port:80', 'wood', 'Eyh8TaRD@&120226');
        }
	}
?>