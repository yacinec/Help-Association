<?php

	require_once("include/vueGenerique.php");

	class VueMembre extends VueGenerique {

		function __construct() {

		}

		function afficherListeMembre($membres, $total) {
			
			//var_dump($nbMembre);
			$total = $total->fetch();
			?>
					<h3>Gestion des Membre</h3>

					<div class="total">
						<h4>Nombre total de membres</h4>
						<p><?php echo $total[0]; ?></p>
					</div>

					<div id="dernier-article">
							<?php while($donnee = $membres->fetch()) { ?>
							<div class="article-base">

								<h4>ID MEMBRES - <?php echo $donnee["idMembre"]; ?></h4>
								<hr />

								<ul>
									<li>Pseudo - <?php echo $donnee["pseudo"]; ?></li>
									<li>Nom - <?php echo $donnee["nom"]; ?></li>
									<li>Prenom - <?php echo $donnee["prenom"]; ?></li>
								</ul>

								<a style="text-align: center;" href="index.php?page=membre&action=afficher&id=<?php echo $donnee["idMembre"]; ?>" >Voir plus</a>
								<a style="text-align: center;" href="index.php?page=membre&action=supprimer&id=<?php echo $donnee["idMembre"]; ?>" >Supprimer</a>
								
							</div>
							<?php }?>
						</div>
				
			

			<?php
		}


		function afficherMembre($membre) {
			
			//var_dump($nbMembre);
			$donnee = $membre->fetch();
			?>
					<h3>Gestion des Membre</h3>

					<div id="dernier-article">
							<div class="article-base">

								<h4>ID MEMBRES - <?php echo $donnee["idMembre"]; ?></h4>
								<hr />

								<ul>
									<li>Pseudo - <?php echo $donnee["pseudo"]; ?></li>
									<li>Nom - <?php echo $donnee["nom"]; ?></li>
									<li>Prenom - <?php echo $donnee["prenom"]; ?></li>
									<li>Email - <?php echo $donnee["email"]; ?></li>
									<li>Numéro - <?php echo $donnee["tel"]; ?></li>
									<li>Adresse - <?php echo $donnee["adresse"]; ?></li>
								</ul>

					<a href="index.php?page=membre&action=afficherListe">Retour à la liste des membres</a>
								<a style="text-align: center;" href="index.php?page=membre&action=supprimer&id=<?php echo $donnee["idMembre"]; ?>" >Supprimer</a>
								
							</div>
						</div>
				
			

			<?php
		}

		function suppSucces() {

			?>
				<div id="success">
					<p>Le membre a bien été supprimé !</p>
					<a href="index.php?page=membre&action=afficherListe">Retour à la liste des membres</a>
				</div>

			<?php
		}

	}
?>