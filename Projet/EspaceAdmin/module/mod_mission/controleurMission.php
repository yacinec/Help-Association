<?php

	require_once("include/controleurGenerique.php");
	require_once("module/mod_mission/modeleMission.php");
	require_once("module/mod_mission/vueMission.php");

	class ControleurMission extends ControleurGenerique {

		function __construct() {
			parent::__construct( new ModeleMission(), new VueMission());

		}
		
		function afficherListeMission() {
			$this->vue->afficherListeMission($this->modele->getListeMission(), $this->modele->getNbMissionTotal());
		}

		function afficherMission($id) {
			$this->vue->afficherMission($this->modele->getMission($id));
		}

		function afficherFormModif($id) {
			$this->vue->afficherFormModif($this->modele->getMission($id));
		}

		function afficherFormAjout() {
			$this->vue->afficherFormAjout();
		}


		function ajouterMission() {
			if($this->modele->ajouterMission())
				$this->vue->ajoutSucces(); 
			else
				$this->vue->ajoutEchec(); 

		}

		function modifierMission($id) {
			$this->modele->modifierMission($id);
			$this->vue->modifSucces(); 
		}
	
		function supprimerMission($id) {
			$this->modele->supprimerMission($id);
			$this->vue->suppSucces(); 
		}


	}
?>