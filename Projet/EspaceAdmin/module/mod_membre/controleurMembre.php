<?php

	require_once("include/controleurGenerique.php");
	require_once("module/mod_membre/modeleMembre.php");
	require_once("module/mod_membre/vueMembre.php");

	class ControleurMembre extends ControleurGenerique {

		function __construct() {
			parent::__construct( new ModeleMembre(), new VueMembre());

		}
		
		function afficherListeMembre() {
			$this->vue->afficherListeMembre($this->modele->getListeMembre(), $this->modele->getNbMembreTotal());
		}

		function afficherMembre($id) {
			$this->vue->afficherMembre($this->modele->getMembre($id));
		}
	
		function supprimerMembre($id) {
			$this->modele->supprimerMembre($id);
			$this->vue->suppSucces(); 
		}


	}
?>