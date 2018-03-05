<?php

	require_once("include/controleurGenerique.php");

	class ModuleGenerique {

		protected $controleur;

		function __construct($controleur) {

			$this->controleur = $controleur;
		}
	}
?>