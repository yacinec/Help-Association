<?php

	require_once("include/modeleGenerique.php");

	class ModeleMembre extends ModeleGenerique {

		public $donnee;

		function __construct() {
			parent::__construct();
		}


		function getNbMembreTotal() {
			return self::$connexion->query("SELECT COUNT(idMembre) FROM membre"); 
		}

		function getListeMembre() {
			return self::$connexion->query("SELECT * FROM membre"); 
		}

		function getMembre($id) {
			$req = self::$connexion->prepare("SELECT * FROM membre WHERE idMembre = ?");
			$req->execute(array($id));

			return $req;
		}

	
		function supprimerMembre($id) {
		
			$req = self::$connexion->prepare('DELETE FROM membre WHERE idMembre = ?');
			$req->execute(array($id));

		}

		
	}
?>