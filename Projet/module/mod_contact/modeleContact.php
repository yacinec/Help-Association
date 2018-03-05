<?php

	require_once("include/modeleGenerique.php");

	class ModeleContact extends ModeleGenerique {

		public $donnee;

		function __construct() {
			parent::__construct();
		}

		function envoieMessage(){
			if(isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["msg"])  && isset($_POST["titre"])) {

				$prenom = htmlspecialchars($_POST["prenom"]);
				$nom = htmlspecialchars($_POST["nom"]);
				$message = htmlspecialchars($_POST["msg"]);
				$titre = htmlspecialchars($_POST["titre"]);



				$req = self::$connexion->prepare("INSERT INTO contact(prenom, nom, message, titre, date) VALUES(:prenom,:nom,:message, :titre, CURDATE())") or die(print_r(self::$connexion->errorInfo()));;
				$req->execute(array(
					'prenom' => $prenom,
					'nom' => $nom,
					'message' => $message,
					'titre' => $titre));

				return true;
			}
			else {
				return false;
			}

		}

	}
?>
