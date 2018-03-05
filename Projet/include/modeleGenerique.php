<?php

	class ModeleGenerique {

		public static $connexion;

		function __construct() {
			try {
				
				self::$connexion = new PDO('mysql:host=localhost;dbname=database;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			} catch(Exception $e) {
			        die('Erreur : '.$e->getMessage());
			}
		}
	}
?>
