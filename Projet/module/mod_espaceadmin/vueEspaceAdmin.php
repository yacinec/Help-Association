<?php

	require_once("include/vueGenerique.php");

	class VueEspaceAdmin extends VueGenerique {

		function __construct() {

		}

		function afficherAccueil($nbMembre, $nbArticle, $nbMission, $dernierArticle) {
			
			var_dump($nbMembre);
			?>
			<div id="espace-membre">

				<div id="bar-gauche">
					<a href="" id="logo"><img src="img/logo.png" alt=""></a>
					
					<ul>
						<li>
							<a href="">
								<img src="img/dashboard.png" alt="">
								<p>Dashboard</p>
							</a>
						</li>	
						
						<li>
							<a href="">
								<img src="img/article.png" alt="">
								<p>Article</p>
							</a>
						</li>
						
						<li>
							<a href="">
								<img src="img/don.png" alt="">
								<p>Don</p>
							</a>
						</li>

						<li>
							<a href="">
								<img src="img/mission.png" alt="">
								<p>Mission</p>
							</a>
						</li>

						<li>
							<a href="">
								<img src="img/commentaire.png" alt="">
								<p>Commentaire</p>
							</a>
						</li>

						<li>
							<a href="">
								<img src="img/contact.png" alt="">
								<p>Contact</p>
							</a>
						</li>

						<li id="mem">
							<a href="">
								<img src="img/membre.png" alt="">
								<p>Membre</p>
							</a>
						</li>

					</ul>
				</div>
				
				<div id="bloc-contenu">
					<div id="bar-header">
						<ul>
							<li><a href="">Home</a></li>
							<li><a href="">Home</a></li>
							<li><a href="">Home</a></li>
						</ul>

						<a><img src="img/deconnexion.png" id="deconnexion" /></a>
					</div>

					<div id="contenu">
						
						<h3>Tableau de bord</h3>
						<div id="vue-global">
							<div id="stat-membre">
								<h2>MEMBRES</h2>		
								<p><?php echo $nbMembre;?></p>
							</div>

							<div id="stat-article">
								<h2>ARTICLES</h2>		
								<p><?php echo $nbArticle;?></p>
							</div>

							<div id="stat-mission">
								<h2>MISSIONS</h2>		
								<p><?php echo $nbMission;?></p>
							</div>

						</div>

						<div id="dernier-article">
							<?php while($donnee = $dernierArticle->fetch()) { ?>
							<div id="article-base">

								<h4><?php echo $donnee["titre"]; ?></h4>

								<p><?php echo substr($donnee["contenu"], 0, 50) . "..."; ?></p>
								<a href="index.php?page=espaceadmin&action=article&action=edit&id=<?php echo $donnee["idArticle"]; ?>" id="lire">Lire la suite...</a>
							</div>
							<?php }?>
						</div>

					</div>
				</div>
			</div>

			<?php
		}

	}
?>