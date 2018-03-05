<?php

	require_once("include/modeleGenerique.php");

	class ModeleMission extends ModeleGenerique {

		public $donnee;

		function __construct() {
			parent::__construct();
		}


		function getNbMissionTotal() {
			return self::$connexion->query("SELECT COUNT(idMission) FROM mission"); 
		}

		function getListeMission() {
			return self::$connexion->query("SELECT * FROM mission"); 
		}

		function getMission($id) {
			$req = self::$connexion->prepare("SELECT * FROM mission WHERE idMission = ?");
			$req->execute(array($id));

			return $req;
		}

	
		function modifierMission($id) {
		
			if(isset($_POST["titre"]) && $_POST["description"] && isset($_POST["lieu"]) && isset($_POST["dateD"]) && isset($_POST["dateF"]) && !empty($_POST['titre']) && !empty($_POST["description"]) && !empty($_POST["lieu"]) ) {
				
				$titre = htmlspecialchars($_POST["titre"]);
				$desc = $_POST["description"];
				$dateD = htmlspecialchars($_POST["dateD"]);
				$dateF = htmlspecialchars($_POST["dateF"]);
				$lieu = htmlspecialchars($_POST["lieu"]);

				$req = self::$connexion->prepare('UPDATE mission SET titre = ?, description = ?, lieu = ?, dateDeb = ?, dateFin = ? WHERE idMission = ?');
				
				$req->execute(array($titre, $desc, $lieu, $dateD, $dateF, $id));
				
				return true;
			}
			else {
				return false;
			}
		}

		function ajouterMission() {
		
			if(isset($_POST["titre"]) && $_POST["description"] && isset($_POST["lieu"]) && isset($_POST["dateD"]) && isset($_POST["dateF"]) && !empty($_POST['titre']) && !empty($_POST["description"]) && !empty($_POST["lieu"]) ) {
				
				$titre = htmlspecialchars($_POST["titre"]);
				$desc = $_POST["description"];
				$dateD = htmlspecialchars($_POST["dateD"]);
				$dateF = htmlspecialchars($_POST["dateF"]);
				$lieu = htmlspecialchars($_POST["lieu"]);
				$nb = 0;

				$req = self::$connexion->prepare('INSERT INTO mission(titre, description, lieu, dateDeb, dateFin, nbParticipant) VALUES(?, ?, ?, ?, ?, ?)');
				
				$req->execute(array($titre, $desc, $lieu, $dateD, $dateF, $nb));
				
				return true;
			}
			else {
				return false;
			}
		}


		function supprimerMission($id) {
		
			$req = self::$connexion->prepare('DELETE FROM mission WHERE idMission = ?');
			$req->execute(array($id));

		}

		
	}
?>