<?php

	require_once("include/modeleGenerique.php");

	class ModeleContact extends ModeleGenerique {

		public $donnee;

		function __construct() {
			parent::__construct();
		}


		function getNbMessageTotal() {
			return self::$connexion->query("SELECT COUNT(idContact) FROM contact"); 
		}

		function getListeMessage() {
			return self::$connexion->query("SELECT * FROM contact"); 
		}

		function getMessage($id) {
			$req = self::$connexion->prepare("SELECT * FROM contact WHERE idContact = ?");
			$req->execute(array($id));

			return $req;
		}

	
		function supprimerMessage($id) {
		
			$req = self::$connexion->prepare('DELETE FROM contact WHERE idContact = ?');
			$req->execute(array($id));

		}

		
	}
?>