<?php

	require_once("include/modeleGenerique.php");

	class ModeleAccueil extends ModeleGenerique {

		public $donnee;

		function __construct() {
			parent::__construct();
		}


		function getNbMembre() {
			$nb = self::$connexion->query("SELECT COUNT(idMembre) FROM membre");
			$result = $nb->fetch();

			return $result;
		}


		function getNbArticle() {
			$nb =  self::$connexion->query("SELECT COUNT(idArticle) FROM article");
			$result = $nb->fetch();

			return $result;
		}

		function getNbMission() {
			$nb =  self::$connexion->query("SELECT COUNT(idMission) FROM mission");
			$result = $nb->fetch();

			return $result;
		}

		function getDernierArticle() {
			return self::$connexion->query("SELECT * FROM article LIMIT 3"); 
		}
	}
?>