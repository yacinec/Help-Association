<?php

	require_once("include/vueGenerique.php");

	class VueDon extends VueGenerique {

		function __construct() {

		}

		function afficherListeDon($dons, $total) {

			$total = $total->fetch();
			?>
					<h3>Gestion des dons</h3>

					<div class="total">
						<h4>Nombre total de dons</h4>
						<p><?php echo $total[0]; ?></p>
					</div>

					<div id="don-contenu">
							<?php while($donnee = $dons->fetch()) { ?>
							<div id="don-base">
								<h5>ID - <?php echo $donnee['idDon']; ?></h5>
								<ul>
									<li>Nom: <?php echo $donnee['nom']; ?></li>
									<li>Prénom: <?php echo $donnee['prenom']; ?></li>
									<li>Numéro: <?php echo $donnee['numero']; ?></li>
									<li>Email: <?php echo $donnee['email']; ?></li>
									<li>RIB: <?php echo $donnee['rib']; ?></li>
									<li><strong>Valeur: <?php echo $donnee['valeur']; ?></strong></li>
								</ul>
							</div>
							<?php }?>
					</div>
				
			

			<?php
		}

	}
?>