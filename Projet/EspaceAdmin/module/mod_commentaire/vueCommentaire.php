<?php

	require_once("include/vueGenerique.php");

	class VueCommentaire extends VueGenerique {

		function __construct() {

		}

		function afficherListeCommentaire($commentaires, $total) {

			$total = $total->fetch();
			?>
					<h3>Gestion des commentaire</h3>

					<div class="total">
						<h4>Nombre total de commentaires</h4>
						<p><?php echo $total[0]; ?></p>
					</div>

					<div id="commentaire-contenu">
							<?php while($donnee = $commentaires->fetch()) {  ?>
							<div id="commentaire-base">
								<h5>ID - <?php echo $donnee['idCommentaire']; ?></h5>
								
								<p class="commentaire-texte">Membre: <?php echo $donnee['pseudo']; ?><br />
								Article: <?php echo $donnee['titre']; ?></p>
								
								
								<p id="commentaire-value"> <?php echo $donnee['contenu']; ?></p>

								<p class="commentaire-texte" id="commentaire-inline">Date - <?php echo $donnee['date']; ?></p>


								<a href="index.php?page=commentaire&action=supprimer&id=<?php echo $donnee['idCommentaire']; ?>">Supprimer</a>
							</div>
							<?php }?>
					</div>
				
			

			<?php
		}

		function suppSucces() {
			?>
				<div id="success">
					<p>Le commentaire a bien été supprimé !</p>
					<a href="index.php?page=commentaire&action=afficher">Retour vers liste des commentaires</a>
				</div>

			<?php
		}

	}
?>