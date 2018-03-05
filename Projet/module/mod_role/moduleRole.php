<?php
	
	require_once("include/moduleGenerique.php");
	require_once("module/mod_role/controleurRole.php");

	class ModuleRole extends ModuleGenerique {

		function __construct() {

			parent::__construct(new ControleurRole());


			$this->controleur->afficher();
			
		}
	}
?>