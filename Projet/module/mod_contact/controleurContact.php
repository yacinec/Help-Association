<?php

	require_once("include/controleurGenerique.php");
	require_once("module/mod_contact/modeleContact.php");
	require_once("module/mod_contact/vueContact.php");

	class ControleurContact extends ControleurGenerique {

		function __construct() {
			parent::__construct( new ModeleContact(), new VueContact());

		}
		
		
		function afficher() {
			$this->vue->afficher();
		}

		function envoieMesg(){
			if($this->modele->envoieMessage())
				$this->vue->afficherReussite();
			else
				$this->vue->afficherEchec();
		}


		
	}
?>
