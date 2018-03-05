<?php

	require_once("include/modeleGenerique.php");

	class ModeleAccueil extends ModeleGenerique {

		function __construct() {

		}

		function getDernierArticle() {

			$requete = self::$connexion->query("SELECT * FROM article order by id");
			
			var_dump($requete);
			return $requete;
		}
		
	}
?>