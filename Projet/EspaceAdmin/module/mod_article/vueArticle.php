<?php

	require_once("include/vueGenerique.php");

	class VueArticle extends VueGenerique {

		function __construct() {

		}

		function afficherListe($dernierArticle) {
			
			//var_dump($nbMembre);
			?>
					<h3>Gestion des Articles</h3>

					<a id="ecrireArt" href="index.php?page=article&action=formAjout" >Ecrire un nouvel article</a>

					<div id="dernier-article">
							<?php while($donnee = $dernierArticle->fetch()) { ?>
							<div class="article-base">

								<h4><?php echo $donnee["titre"]; ?></h4>
								<hr />

								<p><span class="resume">Resumé :</span> <br /> <?php echo substr($donnee["contenu"], 0, 300) . "..."; ?></p>
								
								<p id="theme">Theme : <?php echo $donnee["theme"]; ?></p>
								<p id="auteur">Auteur : <?php echo $donnee["auteur"]; ?></p>
						
								<p id="date">Date de publication : <?php echo $donnee["date"]; ?></p>
								<div class="article-liens">
									<a href="index.php?page=article&action=afficher&id=<?php echo $donnee["idArticle"]; ?>" >Afficher</a>
									<a href="index.php?page=article&action=formEdition&id=<?php echo $donnee["idArticle"]; ?>">Editer</a>
									<a href="index.php?page=article&action=supprimer&id=<?php echo $donnee["idArticle"]; ?>" >Supprimer</a>
								</div>
							</div>
							<?php }?>
						</div>
				
			

			<?php
		}

		function afficherArticle($article) {
			
			//var_dump($nbMembre);
			$donnee = $article->fetch();
			//var_dump($donnee);
			?>
				<div id="article">
					<h3><?php echo $donnee["titre"]; ?></h3>

						<hr />

						<p><span class="resume">Resumé :</span> <br /> <?php echo $donnee['contenu']; ?></p>
						<p id="theme">Theme : <?php echo $donnee["theme"]; ?></p>
						<p id="auteur">Auteur : <?php echo $donnee["auteur"]; ?></p>
						<p id="date">Date de publication : <?php echo $donnee["date"]; ?></p>
						<div class="article-liens">
							<a href="index.php?page=article&action=formEdition&id=<?php echo $donnee["idArticle"]; ?>">Editer</a>
							<a href="index.php?page=article&action=supprimer&id=<?php echo $donnee["idArticle"]; ?>" >Supprimer</a>
						</div>
				</div>
			

			<?php
		}

		function afficherFormulaireEdition($article) {
			
			//var_dump($nbMembre);
			$donnee = $article->fetch();
			//var_dump($donnee);
			?>
			<h3>Modification d'article</h3>
				<div id="article-edition">
					<form method="POST" action="index.php?page=article&action=editer&id=<?php echo $donnee["idArticle"]; ?>">
						
						<label>Titre </label><br /><input type="text" name="titre" value="<?php echo $donnee["titre"]; ?>" />
						
						<hr />
						<br/>
					
						<label>Contenu</label><br/>
						<textarea rows="10" cols="50" name="contenu" >
							<?php echo $donnee['contenu']; ?>
						</textarea>

						<br/><br/>
					
						<label>Theme</label>
						<select name="theme">
				           <option value="Economie">Economie</option>
				           <option value="Politique">Politique</option>
				           <option value="Actualie">Actualité</option>
           				</select>
           				
           				<br/><br/>
						<br/><br/>
						
						<input type="submit" name="modifier" value="Modifier" />
					</form>
						
				</div>
			

			<?php
		}

		function afficherFormulaireAjout() {
			
			?>
			<h3>Modification d'article</h3>
				<div id="article-ajout">
					<form method="POST" action="index.php?page=article&action=ajouter">
						<label>Titre </label><br /><input type="text" name="titre" />
						<hr />
						<br/>
						<label>Contenu</label><br/>
						<textarea rows="10" cols="50" name="contenu" >
							
						</textarea>
						<br/><br/>
						<label>Theme</label>
						<select name="theme">
				           <option value="Economie">Economie</option>
				           <option value="Politique">Politique</option>
				           <option value="Actualie">Actualité</option>
           				</select>
           				<br/><br/>
						<input type="submit" name="envoyer" value="Envoyer" />
					</form>
						
				</div>
			

			<?php
		}


		function modifSucces() {

			?>
				<div id="success">
					<p>La modification de l'article a bien été effectué !</p>
					<a href="index.php?page=article">Retour à la liste des articles</a>
				</div>

			<?php
		}

		function modifEchec() {
			?>
				<div id="echec">
					<p>Erreur lors de la modification de l'article.</p>
					<a href="index.php?page=article">Retour à la liste des articles</a>
				</div>

			<?php
		}

		function supprimerSucces() {

			?>
				<div id="success">
					<p>L'article a bien été supprimé !</p>
					<a href="index.php?page=article">Retour à la liste des articles</a>
				</div>

			<?php
		}

		function ajoutSucces() {

			?>
				<div id="success">
					<p>L'article a bien été ajouté !</p>
					<a href="index.php?page=article">Retour à la liste des articles</a>
				</div>

			<?php
		}

		function ajoutEchec() {
			?>
				<div id="echec">
					<p>Erreur lors de l'ajout de l'article.</p>
					<a href="index.php?page=article">Retour à la liste des articles</a>
				</div>

			<?php
		}
	}
?>