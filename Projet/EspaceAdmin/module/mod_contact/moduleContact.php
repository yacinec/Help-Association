<?php
	
	require_once("include/moduleGenerique.php");
	require_once("module/mod_contact/controleurContact.php");

	class ModuleContact extends ModuleGenerique {

		function __construct() {

			parent::__construct(new ControleurContact());


			if(isset($_GET["action"])) {
				
				$action = htmlspecialchars($_GET["action"]);

				if(isset($_GET["id"]))
					$id = htmlspecialchars($_GET["id"]);

				switch ($action) {

					case 'afficherListe':
						$this->controleur->afficherListeMessage();
						break;
					case 'afficher':
						$this->controleur->afficherMessage($id);
						break;
					case 'supprimer':
						$this->controleur->supprimerMessage($id);
						break;
					default:
						$this->controleur->afficherListeMessage();
						break;
				}
			}
			else {
				$this->controleur->afficherListeMessage();
			}
			
		}
	}
?>