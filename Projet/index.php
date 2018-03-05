<?php
	
	session_start();

	if(isset($_GET["page"])) {

		$page = $_GET["page"];

		switch ($page) {

			case 'accueil':
				$nom_module = 'ModuleAccueil';
				require_once("module/mod_accueil/moduleAccueil.php");
				break;
			case 'article':
				$nom_module = 'ModuleArticle';
				require_once("module/mod_article/moduleArticle.php");
				break;
			case 'membre':
				$nom_module = 'ModuleMembre';
				require_once("module/mod_membre/moduleMembre.php");
				break;
			case 'activite':
				$nom_module = 'ModuleActivite';
				require_once("module/mod_activite/moduleActivite.php");
				break;
			case 'soutenir':
				$nom_module = 'ModuleSoutenir';
				require_once("module/mod_soutenir/moduleSoutenir.php");
				break;
			case 'connaitre':
				$nom_module = 'ModuleConnaitre';
				require_once("module/mod_connaitre/moduleConnaitre.php");
				break;
			case 'role':
				$nom_module = 'ModuleRole';
				require_once("module/mod_role/moduleRole.php");
				break;
			case 'don':
				$nom_module = 'ModuleDon';
				require_once("module/mod_don/moduleDon.php");
				break;
			case 'mission':
				$nom_module = 'ModuleMission';
				require_once("module/mod_mission/moduleMission.php");
				break;
			case 'connexion':
				$nom_module = 'ModuleConnexion';
				require_once("module/mod_connexion/moduleConnexion.php");
				break;

			case 'contact';
				$nom_module = 'ModuleContact';
				require_once("module/mod_contact/moduleContact.php");
				break;

			case 'espaceadmin';
				$nom_module = 'ModuleEspaceAdmin';
				require_once("module/mod_espaceadmin/moduleEspaceAdmin.php");
				break;


			default:
				$nom_module = 'ModuleAccueil';
				require_once("module/mod_accueil/moduleAccueil.php");
				break;
		}



	}


	
		include("template.php");
?>
