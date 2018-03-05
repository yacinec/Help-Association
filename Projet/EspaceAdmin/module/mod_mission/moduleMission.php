<?php
	
	require_once("include/moduleGenerique.php");
	require_once("module/mod_mission/controleurMission.php");

	class ModuleMission extends ModuleGenerique {

		function __construct() {

			parent::__construct(new ControleurMission());


			if(isset($_GET["action"])) {
				
				$action = htmlspecialchars($_GET["action"]);

				if(isset($_GET["id"]))
					$id = htmlspecialchars($_GET["id"]);

				switch ($action) {

					case 'afficherListe':
						$this->controleur->afficherListeMission();
						break;
					case 'afficher':
						$this->controleur->afficherMission($id);
						break;
					case 'formModif':
						$this->controleur->afficherFormModif($id);
						break;
					case 'formAjout':
						$this->controleur->afficherFormAjout();
						break;
					case 'ajouter':
						$this->controleur->ajouterMission();
						break;
					case 'modifier':
						$this->controleur->modifierMission($id);
						break;
					case 'supprimer':
						$this->controleur->supprimerMission($id);
						break;
					default:
						$this->controleur->afficherListeMission();
						break;
				}
			}
			else {
				$this->controleur->afficherListeMission();
			}
			
		}
	}
?>