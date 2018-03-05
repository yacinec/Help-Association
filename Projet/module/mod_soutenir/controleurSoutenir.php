<?php

	require_once("include/controleurGenerique.php");
	require_once("module/mod_soutenir/modeleSoutenir.php");
	require_once("module/mod_soutenir/vueSoutenir.php");

	class ControleurSoutenir extends ControleurGenerique {

		function __construct() {
			parent::__construct( new ModeleSoutenir(), new VueSoutenir());

		}
		
		
		function afficher() {
			
			$this->vue->afficher();
		}

		
	}
?>