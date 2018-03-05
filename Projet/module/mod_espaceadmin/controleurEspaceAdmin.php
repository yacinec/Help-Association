<?php

	require_once("include/controleurGenerique.php");
	require_once("module/mod_espaceadmin/modeleEspaceAdmin.php");
	require_once("module/mod_espaceadmin/vueEspaceAdmin.php");

	class ControleurEspaceAdmin extends ControleurGenerique {

		function __construct() {
			parent::__construct( new ModeleEspaceAdmin(), new VueEspaceAdmin());

		}
		
		function afficherAccueil() {

			$this->vue->afficherAccueil($this->modele->getNbMembre(), $this->modele->getNbArticle(), $this->modele->getNbMission(), $this->modele->getDernierArticle());
		}

		
	}
?>