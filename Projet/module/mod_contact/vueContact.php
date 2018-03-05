<?php
require_once("include/vueGenerique.php");

class VueContact extends VueGenerique {

	
	function afficher() {
?>
	

		<section id="corps">
			
			<h3 class="titre">NOUS CONTACTER</h3>

			<div id="l1"></div>

			<section class="contact1">


				<iframe class="carte" style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2710.207049454749!2d-1.5729033!3d47.2125309!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805ec0fcda6c4cb%3A0xd620ca38dafa1e9a!2s2+Rue+La+Motte+Picquet%2C+44100+Nantes!5e0!3m2!1sfr!2sfr!4v1423244007186" width="250" height="130" frameborder="0">
				</iframe>

				
				<div class="contact">
					<p><B>Adresse :</B>
					<br>2, rue La Motte Piquet</br>
					75000 PARIS</p>

					<B>Accès :</B>
					<p>Métro <img id="metro5" src="img/5.png">
						 bus <img id="bus"src ="img/60.svg"> </p>
					</div>
		
		
			</section>

			<div id="l1"></div>


			<section class="contact2">
				

					

					<!-- INFOS MESG -->
					<div class="contact">
					<h4 class="h4">Veuillez remplir le formulaire</h4>
				

   				 <form method="POST" action="index.php?page=contact&action=envoie" >
   				 	<label for="don">Titre*</label><input type="text" name="titre"><br />
   				 	<br></br>
   				 <label for="don">Prénom*</label><input type="text" name="prenom"><br />
				<br></br>
				<label for="don">Nom*</label><input type="text" name="nom"><br />
				<br></br>
				<label for="don">Courriel*</label><input type="text" name="courriel"><br />
				<p></p>
   				 Votre message :
    			<TEXTAREA name="msg" rows=4 cols=40>Message</TEXTAREA>
				<input id="bouton" type="submit" name="envoie" value="ENVOYER">
				</form>

				</div>

			</section>
	
		</section>
	<?php
	}


	function afficherReussite() {
		
		?>
			<section id="corps">
			
				<h3 class="titre">NOUS CONTACTER</h3>

				<section class="contact1">
						<p>Votre message a bien été envoyer.</p>
					<a class="lien" href="index.php?page=accueil">Revenir sur l'accueil</a>

				</section>
	
			</section>
		<?php 
	}

	function afficherEchec() {
		?>

		<section id="corps">
			
				<h3 class="titre">NOUS CONTACTER</h3>

				<section class="contact1">
						<p>Votre message n'a pas pu être envoyer. Veuillez vérifier que tous les champs ont été remplis correctement !</p>
				<a class="lien" href="index.php?page=contact">Revenir au formulaire</a>

				</section>
	
			</section>
		<?php 
	}
}

?>
