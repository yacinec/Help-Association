<?php

	require_once("include/modeleGenerique.php");

	class ModeleCommentaire extends ModeleGenerique {

		public $donnee;

		function __construct() {
			parent::__construct();
		}


		function getListeCommentaire() {
			return self::$connexion->query("SELECT c.idCommentaire, c.contenu, c.date, a.pseudo, b.titre FROM commentaire as c INNER JOIN membre as a ON c.idAuteur = a.idMembre  INNER JOIN article as b ON c.idArticle = b.idArticle");
		}

		function getNbTotalCommentaire() {
			return self::$connexion->query("SELECT COUNT(idCommentaire) FROM commentaire");
		}

		function supprimerCommentaire($id) {
			$req = self::$connexion->prepare("DELETE FROM commentaire WHERE idCommentaire = ?");
			$req->execute(array($id));
		}

		
	}
?>