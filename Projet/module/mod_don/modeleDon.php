<?php

	require_once("include/modeleGenerique.php");

	class ModeleDon extends ModeleGenerique {

		public $donnee;

		function __construct() {
			parent::__construct();
		}

		function envoyer(){
			if(isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["courriel"])  && !empty($_POST["prenom"])  && !empty($_POST["nom"])  && !empty($_POST["courriel"])) {

				$prenom = htmlspecialchars($_POST["prenom"]);
				$nom = htmlspecialchars($_POST["nom"]);
				$courriel = htmlspecialchars($_POST["courriel"]);
				$valeur = htmlspecialchars($_POST["don"]);



				$req = self::$connexion->prepare("INSERT INTO don(prenom, nom, email, valeur, date) VALUES(:prenom,:nom, :courriel, :valeur, CURDATE())") or die(print_r(self::$connexion->errorInfo()));;
				$req->execute(array(
					'prenom' => $prenom,
					'nom' => $nom,
					'courriel' => $courriel,
					'valeur' => $valeur));

				return true;
			}
			else {
				return false;
			}

		}

	}
?>
