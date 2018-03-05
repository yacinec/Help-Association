<?php
	
	require_once("include/moduleGenerique.php");
	require_once("module/mod_membre/controleurMembre.php");

	class ModuleMembre extends ModuleGenerique {

		function __construct() {

			parent::__construct(new ControleurMembre());


			if(isset($_GET["action"])) {
				
				$action = htmlspecialchars($_GET["action"]);

				if(isset($_GET["id"]))
					$id = htmlspecialchars($_GET["id"]);

				switch ($action) {

					case 'afficherListe':
						$this->controleur->afficherListeMembre();
						break;
					case 'afficher':
						$this->controleur->afficherMembre($id);
						break;
					case 'supprimer':
						$this->controleur->supprimerMembre($id);
						break;
					default:
						$this->controleur->afficherListeMembre();
						break;
				}
			}
			else {
				$this->controleur->afficherListeMembre();
			}
			
		}
	}
?>