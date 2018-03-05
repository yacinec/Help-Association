<?php

	require_once("include/modeleGenerique.php");

	class ModeleEspaceAdmin extends ModeleGenerique {

		public $donnee;

		function __construct() {
			parent::__construct();
		}


		function getNbMembre() {
			return self::$connexion->exec("SELECT COUNT(idMembre) FROM membre");

		}


		function getNbArticle() {
			return self::$connexion->query("SELECT COUNT(idArticle) FROM article");
		}

		function getNbMission() {
			return self::$connexion->query("SELECT COUNT(idMission) FROM mission");
		}

		function getDernierArticle() {
			return self::$connexion->query("SELECT * FROM article LIMIT 3"); 
		}
	}
?>