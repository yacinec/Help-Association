<?php
require_once("include/vueGenerique.php");

class VueDon extends VueGenerique {

	
	function afficher() {
?>
	<section id="corps">
		

		<h3 class="titre">Faire un don</h3><!-- <img class="don" src="img/don.png"> -->
		
		<section id ="etapesDon">

<form method="POST" action="index.php?page=don&action=envoyer">


			<div id="etapes" class="don2">
				<h4 class="h4">Information sur le don</h4>
				<strong>Je voudrais faire un don d'un montant de :</strong>
				<br />
				<div class="montant">
				<input type="radio" checked="checked" name="don" value="200" id="don"/> <label for="don">200€</label>
				<input type="radio" name="don" value="100" id="don" /> <label for="don">100€</label>
				<input type="radio" name="don" value="50" id="don" /> <label for="don">50€</label>
				<input type="radio" name="don" value="20" id="don" /> <label for="don">20€</label>
				<input type="radio" name="don" value="10" id="don" /> <label for="don">10€</label>
				<input type="radio" name="don" value="5" id="don" /> <label for="don">5€</label>
				<input type="radio" name="don" value="autre" id="don" /> <label for="don">Autre</label>

				</div>
			</div>
			
			<div id="etapes" class="don1">
				
				<h4 class="h4">Informations sur le donateur *</h4>
				<label for="don">Prénom</label><input type="text" name="prenom"><br />
				<br></br>
				<label for="don">Nom</label><input type="text" name="nom"><br />
				<br></br>
				<label for="don">Courriel</label><input type="text" name="courriel"><br />
				<p></p>
				<input id="bouton" type="submit" name="envoie" value="Donner">

			</div>


			
</form>
		


			<div id="etapes" class="don3">
				<p> Votre don nous touche beaucoup et nous vous remercions vivement pour ce geste. Il nous permettra d'apporter une meilleure qualité de vie aux bénéficiaires des services de l'association qui pourront, grâce à votre don et celui des autres, profiter d'équipements adaptés à leur situation. </p>
				<center><img src="img/logo.png" id="logo"/></center>
			</div>

			<p class="PS"><B>* la demande d'informations personnelles reste strictement confidentielle et aura pour objectif d'informer au donateur des démarches qui ont été faites pour améliorer les services de l'association pour les bénéficiaires.</B></p>

		</section>

	</section>
	<?php
	}


	function afficherMessageSucces() {

		?>
		<section id="corps">
		
			<h3 class="titre">Faire un don</h3><!-- <img class="don" src="img/don.png"> -->
			
			<section id ="etapesDon">

				<div id="etapes" class="don3">
						<p>Votre donnation a bien été effectué ! Nous vous remercions de votre générosité.</p>
						<a href="index.php?page=accueil">Revenir sur l'accueil du site</a>
				</div>

			
			</section>

		</section>
		<?php
	}

	function afficherMessageEchec() {

		?>
		<section id="corps">
		
			<h3 class="titre">Faire un don</h3><!-- <img class="don" src="img/don.png"> -->
			
			<section id ="etapesDon">

				<div id="etapes" class="don3">
						<p>Votre donnation n'a pas pu être effectuée ! Veuillez vérifiez que tout les champs ont bien été remplis correctement.</p>
						<a class="lien" href="index.php?page=don">Revenir au formulaire de donnation</a>
				</div>

			
			</section>

		</section>
		<?php
	}

}

?>