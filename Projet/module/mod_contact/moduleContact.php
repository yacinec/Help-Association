<?php
	
	require_once("include/moduleGenerique.php");
	require_once("module/mod_contact/controleurContact.php");

	class ModuleContact extends ModuleGenerique {

		function __construct() {

			parent::__construct(new ControleurContact());

			if(isset($_GET['action'])){
				// $this->controleur->afficher();

				switch ($_GET['action']) {
					case 'envoie':
						$this->controleur->envoieMesg();
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
