<?php

	class Connexion	{
		
	protected static $bdd;
        
        public function __construct(){
        }

        public static function initConnexion(){
            $user = 'dutinfopw201634';
            $password = 'sahedyja';

            self::$bdd=new PDO('mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw201634',$user,$password);
        }
	}
?>