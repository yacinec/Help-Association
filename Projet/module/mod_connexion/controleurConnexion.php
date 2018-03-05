<?php

	require_once("include/controleurGenerique.php");
	require_once("module/mod_connexion/modeleConnexion.php");
	require_once("module/mod_connexion/vueConnexion.php");

	class ControleurConnexion extends ControleurGenerique {

		function __construct() {
			parent::__construct( new ModeleConnexion(), new VueConnexion());

		}
		
		//Affiche le formulaire de connexion
		function afficherConnexion() {
			$this->vue->afficherFormulaireConnexion();
		}

		//Affiche le formulaire d'inscription
		function afficherInscription() {
			$this->vue->afficherFormulaireInscription();
		}


		//Connecte l'utilisateur
		function connexion() {

			$donnee = $this->modele->connexion();
			if($donnee != false) {
				$this->vue->afficheMessageSuccesConnexion();
				$_SESSION["id"] = $donnee["idMembre"];
				$_SESSION["admin"] = $donnee["droit"];
			}
			else {
				$this->vue->afficheMessageEchecConnexion();	
			}
		}

		//Inscrit l'utilisateur
		function inscription() {
			
			if($this->modele->inscription()) {
				$this->vue->afficheMessageSuccesInscription();
			}
			else {
				$this->vue->afficheMessageEchecInscription();
			}
		}

		
	}
?>