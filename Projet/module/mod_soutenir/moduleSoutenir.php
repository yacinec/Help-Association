è<?php
	
	require_once("include/moduleGenerique.php");
	require_once("module/mod_soutenir/controleurSoutenir.php");

	class ModuleSoutenir extends ModuleGenerique {

		function __construct() {

			parent::__construct(new ControleurSoutenir());


			$this->controleur->afficher();
			
		}
	}
?>