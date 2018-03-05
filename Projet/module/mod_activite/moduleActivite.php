<?php
	
	require_once("include/moduleGenerique.php");
	require_once("module/mod_activite/controleurActivite.php");

	class ModuleActivite extends ModuleGenerique {

		function __construct() {

			parent::__construct(new ControleurActivite());


			$this->controleur->afficher();
			
		}
	}
?>