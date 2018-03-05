<?php

	require_once("include/controleurGenerique.php");
	require_once("module/mod_role/modeleRole.php");
	require_once("module/mod_role/vueRole.php");

	class ControleurRole extends ControleurGenerique {

		function __construct() {
			parent::__construct( new ModeleRole(), new VueRole());

		}
		
		
		function afficher() {
			
			$this->vue->afficher();
		}

		
	}
?>