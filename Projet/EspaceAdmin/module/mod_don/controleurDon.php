<?php

	require_once("include/controleurGenerique.php");
	require_once("module/mod_don/modeleDon.php");
	require_once("module/mod_don/vueDon.php");

	class ControleurDon extends ControleurGenerique {

		function __construct() {
			parent::__construct( new ModeleDon(), new VueDon());

		}
		
		function afficherListeDon() {

			$this->vue->afficherListeDon($this->modele->getListeDon(), $this->modele->getNbTotalDon());
		}
			
	}
?>