<?php

	require_once("include/vueGenerique.php");

	class VueContact extends VueGenerique {

		function __construct() {

		}

		function afficherListeMessage($messages, $total) {
			
			//var_dump($nbMembre);
			$total = $total->fetch();
			?>
					<h3>Gestion des Message</h3>

					<div class="total">
						<h4>Nombre total de messages</h4>
						<p><?php echo $total[0]; ?></p>
					</div>

					<div id="dernier-article">
							<?php while($donnee = $messages->fetch()) { ?>
							<div class="article-base">

								<h4>ID MESSAGE - <?php echo $donnee["idContact"]; ?></h4>
								<hr />

								<p>Sujet : <?php echo $donnee["titre"]; ?></p>

								
								
								<p> <?php echo $donnee["message"]; ?> </p>

								<p>De <strong><?php echo $donnee["nom"] . ' ' . $donnee["prenom"]; ?></strong> le <em><?php echo $donnee["date"]; ?></em></p>
								
								<a style="text-align: center;" href="index.php?page=contact&action=supprimer&id=<?php echo $donnee["idContact"]; ?>" >Supprimer</a>
								
							</div>
							<?php }?>
						</div>
				
			

			<?php
		}

		function suppSucces() {

			?>
				<div id="success">
					<p>Le message a bien été supprimé !</p>
					<a href="index.php?page=contact&action=afficherListe">Retour à la liste des messages</a>
				</div>

			<?php
		}

	}
?>