<?php
require_once("include/vueGenerique.php");

class VueSoutenir extends VueGenerique {

	
	function afficher() {
?>
	<section id="corps">
		
		<h3 class ="titre">NOUS SOUTENIR</h3>
		<div id="l6"></div>
		
		<div class="hautsoutenir">
 		<div class ="partie1">
		<h4 class="h4">Faire un don</h4>
		<p>Il peut s’agir d’argent, de matériel (informatique, fournitures), ou de tout équipement qui pourrait nous être utile.</p>
		</div>

		<div class ="partie2">
		<h4 class="h4">Accueillir l’association</h4>
		<p>Animation en externe - espace coworking- conférence</p>
		</div>
		</div>


		<div class="partie3">
		<h4 class=h4>Devenir bénévole</h4>
		<B>Vous pouvez rejoindre notre équipe de bénévoles et nous aider en fonction de vos souhaits et/ou compétences dans les domaines suivants :</B>

		
			<div class="sousPartie3">
		    <p>Conseils et élaboration de lettre de motivation et de curriculum vitae (CV)</p>
		    <p>Aide aux devoirs</p>
		    <p>Sorties culturelles et sportives</p>
		    <p>Conseils à l’orientation scolaire</p>
		   
		    <p>Préparation à l’entretien d’embauche</p>
		    <p>Coaching au changement</p>
		    <p>Coaching à la citoyenneté</p>
		    <p>Faire connaître l’association</p>
		    </div>
		
		
		</div>

		<div class="partie4">
		<strong>N’hésitez pas à nous contacter : <a href="#">contact@gmail.com</a></strong>
		</div>

	</section>
	<?php
	}

}

?>