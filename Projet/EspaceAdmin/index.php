<?php
	session_start();

	if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
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
				case 'don':
					$nom_module = 'ModuleDon';
					require_once("module/mod_don/moduleDon.php");
					break;
				case 'mission':
					$nom_module = 'ModuleMission';
					require_once("module/mod_mission/moduleMission.php");
					break;
				case 'commentaire':
					$nom_module = 'ModuleCommentaire';
					require_once("module/mod_commentaire/moduleCommentaire.php");
					break;
				case 'contact':
					$nom_module = 'ModuleContact';
					require_once("module/mod_contact/moduleContact.php");
					break;
				case 'membre':
					$nom_module = 'ModuleMembre';
					require_once("module/mod_membre/moduleMembre.php");
					break;



				default:
					$nom_module = 'ModuleAccueil';
					require_once("module/mod_accueil/moduleAccueil.php");
					break;
			}



		}


		
			include("template.php");

	}
	else {
		header("Location: ../index.php?page=accueil");
	}
?>
