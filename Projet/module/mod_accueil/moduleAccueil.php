<?php
	
	require_once("include/moduleGenerique.php");
	require_once("module/mod_accueil/controleurAccueil.php");

	class ModuleAccueil extends ModuleGenerique {

		function __construct() {

			parent::__construct(new ControleurAccueil());

			$this->controleur->afficherAccueil();
		}
	}
?>