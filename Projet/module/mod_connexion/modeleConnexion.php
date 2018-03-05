<?php

	require_once("include/modeleGenerique.php");

	class ModeleConnexion extends ModeleGenerique {

		public $donnee;

		function __construct() {
			parent::__construct();
		}

	

		function inscription() {

			if(isset($_POST["mail"]) && isset($_POST["pseudo"]) && isset($_POST["nom"]) && 	isset($_POST["prenom"]) && 	isset($_POST["tel"]) &&	isset($_POST["adresse"]) && isset($_POST["password"]) && !empty($_POST["mail"]) && !empty($_POST["pseudo"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["tel"]) &&  !empty($_POST["adresse"]) && !empty($_POST["password"])) {

					$mail = htmlspecialchars($_POST["mail"]);
					$pseudo = htmlspecialchars($_POST["pseudo"]);
					$nom = htmlspecialchars($_POST["nom"]);
					$prenom = htmlspecialchars($_POST["prenom"]);
					$tel = htmlspecialchars($_POST["tel"]);
					$adresse = htmlspecialchars($_POST["adresse"]);
					$password = sha1($_POST["password"]);

					$req = self::$connexion->prepare('SELECT * FROM membre WHERE pseudo = ? OR email = ? OR tel = ?');
					$req->execute(array($pseudo, $mail, $tel));

					//var_dump($req->fetch());
					if(!$req->fetch()) {

						$req = self::$connexion->prepare('INSERT INTO membre(email, pseudo, nom, prenom, tel, adresse, password, droit) VALUES(?, ?, ?, ?, ?, ?, ?, 0)');
						$req->execute(array($mail, $pseudo, $nom, $prenom, $tel, $adresse, $password));

						return true;

					}
					else {
						echo "deuxieme if";
						return false;
					}


			}
			else {
				return false;
			}
		}

		function connexion() {

			if(isset($_POST["mail"]) && isset($_POST["password"]) && !empty($_POST["mail"]) && !empty($_POST["password"])) {

					$mail = htmlspecialchars($_POST["mail"]);
					$password = sha1($_POST["password"]);

					$req = self::$connexion->prepare('SELECT * FROM membre WHERE email = ? AND password = ?');
					$req->execute(array($mail, $password));

					//var_dump($req->fetch());
					if($donnee = $req->fetch()) {
						return $donnee;
					}
					else {
						return false;
					}					
			} else {
						echo 'deuxieme if';
				return false;
			}
		}

		



	}
?>