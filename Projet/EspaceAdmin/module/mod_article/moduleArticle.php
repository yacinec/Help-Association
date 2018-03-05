<?php
	
	require_once("include/moduleGenerique.php");
	require_once("module/mod_article/controleurArticle.php");

	class ModuleArticle extends ModuleGenerique {

		function __construct() {

			parent::__construct(new ControleurArticle());


			if(isset($_GET["action"])) {
				
				$action = htmlspecialchars($_GET["action"]);

				if(isset($_GET["id"]))
					$idArticle = htmlspecialchars($_GET["id"]);

				switch ($action) {

					case 'formEdition':
						$this->controleur->afficherFormulaireEdition($idArticle);
						break;
					case 'formAjout':
						$this->controleur->afficherFormulaireAjout();
						break;
					case 'editer':
						$this->controleur->editerArticle($idArticle);
						break;
					case 'ajouter':
						$this->controleur->ajouterArticle();
						break;
					case 'supprimer':
						$this->controleur->supprimerArticle($idArticle);
						break;
					case 'afficher':
						$this->controleur->afficherArticle($idArticle);
						break;
					default:
						$this->controleur->afficherListe();
						break;
				}
			}
			else {
				$this->controleur->afficherListe();
			}
			
		}
	}
?>