<?php

	require_once("include/controleurGenerique.php");
	require_once("module/mod_don/modeleDon.php");
	require_once("module/mod_don/vueDon.php");

	class ControleurDon extends ControleurGenerique {

		function __construct() {
			parent::__construct( new ModeleDon(), new VueDon());

		}
		
		
		function afficher() {
			
			$this->vue->afficher();
		}

		function envoyer() {

			if($this->modele->envoyer()) {
				$this->vue->afficherMessageSucces();	
			}
			else {
				$this->vue->afficherMessageEchec();
			}
		}

		
	}
?>