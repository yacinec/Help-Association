<?php

	require_once("include/controleurGenerique.php");
	require_once("module/mod_contact/modeleContact.php");
	require_once("module/mod_contact/vueContact.php");

	class ControleurContact extends ControleurGenerique {

		function __construct() {
			parent::__construct( new ModeleContact(), new VueContact());

		}
		
		function afficherListeMessage() {
			$this->vue->afficherListeMessage($this->modele->getListeMessage(), $this->modele->getNbMessageTotal());
		}

		function afficherMessage($id) {
			$this->vue->afficherMessage($this->modele->getMessage($id));
		}
	
		function supprimerMessage($id) {
			$this->modele->supprimerMessage($id);
			$this->vue->suppSucces(); 
		}


	}
?>