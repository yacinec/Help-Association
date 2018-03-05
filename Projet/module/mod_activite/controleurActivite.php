<?php

	require_once("include/controleurGenerique.php");
	require_once("module/mod_activite/modeleActivite.php");
	require_once("module/mod_activite/vueActivite.php");

	class ControleurActivite extends ControleurGenerique {

		function __construct() {
			parent::__construct( new ModeleActivite(), new VueActivite());

		}
		
		
		function afficher() {
			
			$this->vue->afficher();
		}

		
	}
?>