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
						$this->controleur->afficher();
						break;
					case 'envoyer':
						$this->controleur->envoyer();
						break;
					default:						
						$this->controleur->afficher();
						break;
				}
			}
			else {
				$this->controleur->afficher();
			}
		}
	}
?>