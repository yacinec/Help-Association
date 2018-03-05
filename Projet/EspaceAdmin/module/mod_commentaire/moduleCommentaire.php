<?php
	
	require_once("include/moduleGenerique.php");
	require_once("module/mod_commentaire/controleurCommentaire.php");

	class ModuleCommentaire extends ModuleGenerique {

		function __construct() {

			parent::__construct(new ControleurCommentaire());


			if(isset($_GET["action"])) {
				
				$action = htmlspecialchars($_GET["action"]);

				if(isset($_GET['id'])) {
					$id = htmlspecialchars($_GET['id']);
				}

				
				switch ($action) {

					case 'afficher':
						$this->controleur->afficherListeCommentaire();
						break;
					case 'supprimer':
						$this->controleur->supprimerCommentaire($id);
						break; 
					default:
						$this->controleur->afficherListeCommentaire();
						break;
				}
			}
			else {
				$this->controleur->afficherListeCommentaire();
			}
			
		}
	}
?>