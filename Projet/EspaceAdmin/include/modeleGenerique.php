<?php

	class ModeleGenerique {

		public static $connexion;

		function __construct() {
			try {
				//self::$connexion = new PDO('mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw201623;charset=utf8', 'dutinfopw201623', 'dararuru', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				self::$connexion = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'laradu27140', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			} catch(Exception $e) {
			        die('Erreur : '.$e->getMessage());
			}
		}
	}
?>
