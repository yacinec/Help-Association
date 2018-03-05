<?php
	
	require_once("include/moduleGenerique.php");
	require_once("module/mod_connexion/controleurConnexion.php");

	class ModuleConnexion extends ModuleGenerique {

		function __construct() {

			parent::__construct(new ControleurConnexion());


			if(!isset($_SESSION['id'])) {
			
				if(isset($_GET["action"])) {
					
					$action = $_GET["action"];

					switch ($action) {
						
						case 'afficherConnexion':
							$this->controleur->afficherConnexion();
							break;
						case 'afficherInscription':
							$this->controleur->afficherInscription();
							break;
						case 'login':
							$this->controleur->connexion();
							break;
						case 'signup':
							$this->controleur->inscription();
							break;
						default:
							$this->controleur->afficherConnexion();
							break;
					}
				}
			
			} else {
				header("Location: index.php?page=accueil");
			}
		}
	}
?>