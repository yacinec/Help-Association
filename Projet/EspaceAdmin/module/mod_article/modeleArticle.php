<?php

	require_once("include/modeleGenerique.php");

	class ModeleArticle extends ModeleGenerique {

		public $donnee;

		function __construct() {
			parent::__construct();
		}


		

		function getListeArticle() {
			return self::$connexion->query("SELECT * FROM article"); 
		}

		function getArticle($id) {
			$req = self::$connexion->prepare("SELECT * FROM article WHERE idArticle = ?");
			$req->execute(array($id));

			return $req;
		}

		function editerArticle($id) {

			if(isset($_POST["titre"]) && !empty($_POST["titre"]) && isset($_POST["contenu"]) && !empty($_POST["contenu"]) ) {
				
				$titre = htmlspecialchars($_POST["titre"]);
				$contenu = htmlspecialchars($_POST["contenu"]);
				$theme = $_POST["theme"];


				$req = self::$connexion->prepare('UPDATE article SET titre = ?, contenu = ?, theme = ? WHERE idArticle = ?')  or die(print_r($bdd->errorInfo()));
				$req->execute(array($titre, $contenu, $theme, $id));

				
				return true;
			}
			else {
				return false;
			}
		}

		function supprimerArticle($id) {
		
			$req = self::$connexion->prepare('DELETE FROM article WHERE idArticle = ?');
			$req->execute(array($id));

		}

		function ajouterArticle() {
		
			if(isset($_POST['titre']) && isset($_POST['contenu']) && isset($_POST['theme'])) {
				
				$titre = htmlspecialchars($_POST['titre']);
				$contenu = htmlspecialchars($_POST['contenu']);
				$auteur = "Yacine";
				$theme = htmlspecialchars($_POST['theme']);

				$req = self::$connexion->prepare('INSERT INTO article(titre, contenu, auteur, theme, date) VALUES(?, ?, ?, ?, CURDATE())');
				$req->execute(array($titre, $contenu, $auteur, $theme));
			
				return true;
			}
			else {
				return false;
			}
		}

	}
?>