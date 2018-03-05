<?php
	
	require_once("include/moduleGenerique.php");
	require_once("module/mod_don/controleurDon.php");

	class ModuleDon extends ModuleGenerique {

		function __construct() {

			parent::__construct(new ControleurDon());


			if(isset($_GET["action"])) {
				
				$action = htmlspecialchars($_GET["action"]);

				
				switch ($action) {

					case 'afficher':
						$this->controleur->afficherListeDon();
						break;
					default:
						$this->controleur->afficherListeDon();
						break;
				}
			}
			else {
				$this->controleur->afficherListeDon();
			}
			
		}
	}
?>