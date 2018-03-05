<?php

	require_once("include/controleurGenerique.php");
	require_once("module/mod_accueil/modeleAccueil.php");
	require_once("module/mod_accueil/vueAccueil.php");

	class ControleurAccueil extends ControleurGenerique {

		function __construct() {

			parent::__construct( new ModeleAccueil(), new VueAccueil());

		}
		


		function afficherDernierArticle(){
				$this->vue->afficherDernierArticle($this->modele->getDernierArticle());

		}


		function afficherAccueil() {
			/*$this->vue->getContenu($this->modele->getDernierArticle());*/
		
		$this->vue->afficher();
		$this->vue->afficherDernierArticle($this->modele->getDernierArticle());


		}
	}
?>
