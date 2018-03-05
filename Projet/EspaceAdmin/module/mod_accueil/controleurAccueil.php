<?php

	require_once("include/controleurGenerique.php");
	require_once("module/mod_accueil/modeleAccueil.php");
	require_once("module/mod_accueil/vueAccueil.php");

	class ControleurAccueil extends ControleurGenerique {

		function __construct() {
			parent::__construct( new ModeleAccueil(), new VueAccueil());

		}
		
		function afficherAccueil() {

			$this->vue->afficherAccueil($this->modele->getNbMembre(), $this->modele->getNbArticle(), $this->modele->getNbMission(), $this->modele->getDernierArticle());
		}

		
	}
?>