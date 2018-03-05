<?php
	
	require_once("include/moduleGenerique.php");
	require_once("module/mod_espaceadmin/controleurEspaceAdmin.php");

	class ModuleEspaceAdmin extends ModuleGenerique {

		function __construct() {

			parent::__construct(new ControleurEspaceAdmin());


			if(isset($_GET["action"])) {
				
				$action = $_GET["action"];

				switch ($action) {
					
					case 'accueil':
						$this->controleur->afficherAccueil();
						break;
					case 'article':
						
						break;
					case 'don':
						
						break;
					case 'mission':
						
						break;
					case 'commentaire':
						
						break;
					case 'contact':
						
						break;
					case 'membre':
						
						break;
					default:
						$this->controleur->afficherAccueil();
						break;
				}
			}
			else {
				$this->controleur->afficherAccueil();
			}
			
		}
	}
?>