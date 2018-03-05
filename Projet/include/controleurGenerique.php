<?php

	require_once("include/modeleGenerique.php");
	require_once("include/vueGenerique.php");

	class ControleurGenerique {

		protected $modele;
		protected $vue;
		
		function __construct($modele, $vue) {
			$this->modele = $modele;
			$this->vue = $vue;
		}

		
	}
?>