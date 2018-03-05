<?php

	require_once("include/vueGenerique.php");

	class VueConnexion extends VueGenerique {

		function __construct() {

		}

		function afficherFormulaireConnexion() {
			?>

			<!-- <section id="corps"> -->

			    		<div class="connexion">

			    		<h4 class="h4">CONNEXION</h4>

			    		<form method="POST" action="index.php?page=connexion&action=login">

							<div class="">
						    	<label for="exampleInputEmail1">Adresse Mail</label>
						    	<input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre adresse mail">
							</div>

					  		<div class="">
					    		<label for="exampleInputPassword1">Mot de passe</label>
					    		<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  		</div>
				 			
				 			<p></p>
				  			<button type="submit" class="">Connexion</button>
						</form>
						</div>

						<div id="msgPasInscrit">
			  			<p class="pasInscrit"> Vous n'êtes pas encore inscrit ?
				        <a class="lien" href="index.php?page=connexion&action=afficherInscription"> <B>Cliquez ici</B></a></p>
				        <!-- <br><a class="lien" href="index.php?page=connexion&action=afficherConnexion">Connexion</a></br> -->
						</div>

			 <!-- </section> -->
			<?php
		}

		function afficherFormulaireInscription() {
			?>

			<div class="connexion">

			    		<h4 class="h4">INSCRIPTION</h4>

			    		<form method="POST" action="index.php?page=connexion&action=signup">

							<div class="">
						    	<label for="exampleInputEmail1">Adresse Mail</label>
						    	<input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre adresse mail">
							</div>
							<br />

							<div class="">
						    	<label for="exampleInputEmail1">Pseudo</label>
						    	<input name="pseudo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez un pseudo">
							</div>
							<br />


							<div class="">
						    	<label for="exampleInputEmail1">Nom</label>
						    	<input name="nom" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre nom">
							</div>
							<br />


							<div class="">
						    	<label for="exampleInputEmail1">Prenom</label>
						    	<input name="prenom" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre prénom">
							</div>
							<br />

							<div class="">
						    	<label for="exampleInputEmail1">Numéro de telephone</label>
						    	<input name="tel" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre numéro de téléphone">
							</div>
							<br />

							<div class="">
						    	<label for="exampleInputEmail1">Adresse</label>
						    	<input name="adresse" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre adresse">
							</div>
							<br />

					  		<div class="">
					    		<label for="exampleInputPassword1">Mot de passe</label>
					    		<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  		</div>
							<br />
				 			
				 			<p></p>
				  			<button type="submit" class="">Inscription</button>
						</form>
						</div>

						<div id="msgPasInscrit">
			  			<p class="pasInscrit"> Vous êtes déjà inscrit ?
				        <a class="lien" href="index.php?page=connexion&action=afficherConnexion"> <B>Cliquez ici</B></a></p>
				        <!-- <br><a class="lien" href="index.php?page=connexion&action=afficherConnexion">Connexion</a></br> -->
						</div>
			<?php
		}

		function afficheMessageSuccesInscription() {

			?>
			<section id="corps">
			
				<section class="contact1">
						<p>Inscription réussite : Vous pouvez désormais vous connectez !</p>
					<a class="lien" href="index.php?page=connexion&action=afficherConnexion">Se connecter</a>

				</section>
	
			</section>
			<?php
		}

		function afficheMessageEchecInscription() {

			?>
			<section id="corps">
			
				<section class="contact1">
						<p>Erreur lors de l'inscription ! Veuillez vérifier que tous les champs ont bien été remplis correctement.</p>
					<a class="lien" href="index.php?page=connexion&action=afficherInscription">S'inscrire</a>

				</section>
	
			</section>
			<?php
		}

		function afficheMessageSuccesConnexion() {

			?>
			<section id="corps">
			
				<section class="contact1">
						<p>Connexion réussite !</p>
					<a class="lien" href="index.php?page=accueil">Revenir à l'accueil</a>

				</section>
	
			</section>
			<?php
		}

		function afficheMessageEchecConnexion() {

			?>
			<section id="corps">
			
				<section class="contact1">
						<p>Erreur lors de la connexion ! Veuillez vérifier que tous les champs ont bien été remplis correctement.</p>
					<a class="lien" href="index.php?page=connexion&action=afficherConnexion">Retour sur le formulaire connexion</a>

				</section>
	
			</section>
			<?php
		}

	}
?>