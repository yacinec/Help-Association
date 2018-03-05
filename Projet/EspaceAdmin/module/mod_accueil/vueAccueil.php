<?php

	require_once("include/vueGenerique.php");

	class VueAccueil extends VueGenerique {

		function __construct() {

		}

		function afficherAccueil($nbMembre, $nbArticle, $nbMission, $dernierArticle) {
			
			//var_dump($nbMembre);
			?>
						<h3>Tableau de bord</h3>
						<div id="vue-global">
							<div id="stat-membre">
								<h2>MEMBRES</h2>		
								<p><?php echo $nbMembre[0];?></p>
							</div>

							<div id="stat-article">
								<h2>ARTICLES</h2>		
								<p><?php echo $nbArticle[0];?></p>
							</div>

							<div id="stat-mission">
								<h2>MISSIONS</h2>		
								<p><?php echo $nbMission[0];?></p>
							</div>

						</div>

						<div id="dernier-article">
							<?php while($donnee = $dernierArticle->fetch()) { ?>
							<div class="article-base">

								<h4><?php echo $donnee["titre"]; ?></h4>

								<p><?php echo substr($donnee["contenu"], 0, 50) . "..."; ?></p>
								<a href="index.php?page=article&action=afficher&id=<?php echo $donnee["idArticle"]; ?>" id="lire">Lire la suite...</a>
							</div>
							<?php }?>
						</div>


					</div>
				
			

			<?php
		}

	}
?>