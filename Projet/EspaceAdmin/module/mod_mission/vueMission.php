<?php

	require_once("include/vueGenerique.php");

	class VueMission extends VueGenerique {

		function __construct() {

		}

		function afficherListeMission($missions, $total) {
			
			//var_dump($nbMembre);
			$total = $total->fetch();
			?>
					<h3>Gestion des Mission</h3>
					<a style="text-align: center; display: block; margin: 0 auto; " href="index.php?page=mission&action=formAjout">Ajouter une nouvelle mission</a>

					<div class="total">
						<h4>Nombre total de missions</h4>
						<p><?php echo $total[0]; ?></p>
					</div>

					<div id="dernier-article">
							<?php while($donnee = $missions->fetch()) { ?>
							<div class="article-base">

								<h4>ID MISSION - <?php echo $donnee["idMission"]; ?></h4>
								<hr />

								<ul>
									<li>Titre - <?php echo $donnee["titre"]; ?></li>
									<li>Début - <?php echo $donnee["dateDeb"]; ?></li>
									<li>Fin - <?php echo $donnee["dateFin"]; ?></li>
								</ul>

								<a style="text-align: center;" href="index.php?page=mission&action=afficher&id=<?php echo $donnee["idMission"]; ?>" >Voir plus</a>
								<a style="text-align: center;" href="index.php?page=mission&action=formModif&id=<?php echo $donnee["idMission"]; ?>" >Modifier</a>
								<a style="text-align: center;" href="index.php?page=mission&action=supprimer&id=<?php echo $donnee["idMission"]; ?>" >Supprimer</a>
								
							</div>
							<?php }?>
						</div>
				
			

			<?php
		}


		function afficherMission($mission) {
			
			//var_dump($nbMembre);
			$donnee = $mission->fetch();
			?>
					<h3>Gestion des Membre</h3>

					<div id="dernier-article">
							<div class="article-base">

								<h4>ID MISSION - <?php echo $donnee["idMission"]; ?></h4>
								<hr />

								<ul>
									<li>Titre - <?php echo $donnee["titre"]; ?></li>
									<li>Début - <?php echo $donnee["dateDeb"]; ?></li>
									<li>Fin - <?php echo $donnee["dateFin"]; ?></li>
									<li>Lieu - <?php echo $donnee["lieu"]; ?></li>
									<li>Descritif - <?php echo $donnee["description"]; ?></li>
									<li>Nombre de Participants - <?php echo $donnee["nbParticipant"]; ?></li>
								</ul>

								<a href="index.php?page=mission&action=afficherListe">Retour à la liste des missions</a>
								<a style="text-align: center;" href="index.php?page=mission&action=formModif&id=<?php echo $donnee["idMission"]; ?>" >Modifier</a>
								<a style="text-align: center;" href="index.php?page=mission&action=supprimer&id=<?php echo $donnee["idMission"]; ?>" >Supprimer</a>
								
							</div>
						</div>
				
			

			<?php
		}

		
		function afficherFormModif($mission) {

			$donnee = $mission->fetch();

		?>
			<h3>Modification de mission</h3>
				<div id="article-edition">
					<form method="POST" action="index.php?page=mission&action=modifier&id=<?php echo $donnee["idMission"]; ?>">
						
						<label>Titre </label><br /><input type="text" name="titre" value="<?php echo $donnee["titre"]; ?>" />
						
						<hr />
						<br/>
						
						<label>Lieu </label><br /><input type="text" name="lieu" value="<?php echo $donnee["lieu"]; ?>" />
						

						<label>Description</label><br/>
						<textarea rows="10" cols="50" name="description" >
							<?php echo $donnee['description']; ?>
						</textarea>

						<br/><br/>
					
						Date début <input type="date" value="<?php echo $donnee["dateDeb"]; ?>" name="dateD">
						Date fin <input type="date"  value="<?php echo $donnee["dateFin"]; ?>" name="dateF">
           				
           				<br/><br/>
						<br/><br/>
						
						<input type="submit" name="modifier" value="Modifier" />
					</form>
						
				</div>
			
		<?php
		}

		function afficherFormAjout() {


		?>
			<h3>Ajouter de mission</h3>
				<div id="article-edition">
					<form method="POST" action="index.php?page=mission&action=ajouter">
						
						<label>Titre </label><br /><input type="text" name="titre" />
						
						<hr />
						<br/>
						
						<label>Lieu </label><br /><input type="text" name="lieu" />
						

						<label>Description</label><br/>
						<textarea rows="10" cols="50" name="description" >
							
						</textarea>

						<br/><br/>
					
						Date début <input type="date"  name="dateD">
						Date fin <input type="date"  name="dateF">
           				
           				<br/><br/>
						<br/><br/>
						
						<input type="submit" name="modifier" value="Ajouter" />
					</form>
						
				</div>
			
		<?php
		}


		function suppSucces() {

			?>
				<div id="success">
					<p>La mission a bien été supprimée !</p>
					<a href="index.php?page=mission&action=afficherListe">Retour à la liste des missions</a>
				</div>

			<?php
		}

		function modifSucces() {

			?>
				<div id="success">
					<p>La mission a bien été modifiée !</p>
					<a href="index.php?page=mission&action=afficherListe">Retour à la liste des missions</a>
				</div>

			<?php
		}

		function ajoutSucces() {

			?>
				<div id="success">
					<p>La mission a bien été ajoutée !</p>
					<a href="index.php?page=mission&action=afficherListe">Retour à la liste des missions</a>
				</div>

			<?php
		}

		function ajoutEchec() {

			?>
				<div id="echec">
					<p>Erreur lors de l'ajout de la mission</p>
					<a href="index.php?page=mission&action=afficherListe">Retour à la liste des missions</a>
				</div>

			<?php
		}

	}
?>