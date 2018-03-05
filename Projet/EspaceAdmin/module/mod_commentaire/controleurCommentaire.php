<?php

	require_once("include/controleurGenerique.php");
	require_once("module/mod_commentaire/modeleCommentaire.php");
	require_once("module/mod_commentaire/vueCommentaire.php");

	class ControleurCommentaire extends ControleurGenerique {

		function __construct() {
			parent::__construct( new ModeleCommentaire(), new VueCommentaire());

		}
		
		function afficherListeCommentaire() {

			$this->vue->afficherListeCommentaire($this->modele->getListeCommentaire(), $this->modele->getNbTotalCommentaire());
		}

		function supprimerCommentaire($id) {

			$this->modele->supprimerCommentaire($id);
			$this->vue->suppSucces();
		}
			
	}
?>