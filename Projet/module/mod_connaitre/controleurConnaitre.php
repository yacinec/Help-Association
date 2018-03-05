<?php

	require_once("include/controleurGenerique.php");
	require_once("module/mod_connaitre/modeleConnaitre.php");
	require_once("module/mod_connaitre/vueConnaitre.php");

	class ControleurConnaitre extends ControleurGenerique {

		function __construct() {
			parent::__construct( new ModeleConnaitre(), new VueConnaitre());

		}
		
		
		function afficher() {
			
			$this->vue->afficher();
		}

		
	}
?>