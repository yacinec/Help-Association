<?php

	require_once("include/controleurGenerique.php");
	require_once("module/mod_article/modeleArticle.php");
	require_once("module/mod_article/vueArticle.php");

	class ControleurArticle extends ControleurGenerique {

		function __construct() {
			parent::__construct( new ModeleArticle(), new VueArticle());

		}
		
		function afficherListe() {

			$this->vue->afficherListe($this->modele->getListeArticle());
		}

		function afficherArticle($id) {
			$this->vue->afficherArticle($this->modele->getArticle($id));
		}
	
		function afficherFormulaireEdition($id) {
			$this->vue->afficherFormulaireEdition($this->modele->getArticle($id));
		}

		function afficherFormulaireAjout() {
			$this->vue->afficherFormulaireAjout();
		}

		function editerArticle($id) {
			if($this->modele->editerArticle($id))
				$this->vue->modifSucces();
			else
				$this->vue->modifEchec(); 
		}


		function ajouterArticle() {
			if($this->modele->ajouterArticle())
				$this->vue->ajoutSucces();
			else
				$this->vue->ajoutEchec(); 
		}

		function supprimerArticle($id) {
			$this->modele->supprimerArticle($id);
			$this->vue->supprimerSucces(); 
		}
			
	}
?>