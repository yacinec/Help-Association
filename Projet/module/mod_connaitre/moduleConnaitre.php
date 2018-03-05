<?php
	
	require_once("include/moduleGenerique.php");
	require_once("module/mod_connaitre/controleurConnaitre.php");

	class ModuleConnaitre extends ModuleGenerique {

		function __construct() {

			parent::__construct(new ControleurConnaitre());


			$this->controleur->afficher();
			
		}
	}
?>