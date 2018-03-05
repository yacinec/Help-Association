<?php

	require_once("include/modeleGenerique.php");

	class ModeleDon extends ModeleGenerique {

		public $donnee;

		function __construct() {
			parent::__construct();
		}


		function getListeDon() {
			return self::$connexion->query("SELECT * FROM don");
		}

		function getNbTotalDon() {
			return self::$connexion->query("SELECT COUNT(idDon) FROM don");
		}

		
	}
?>