<header>

	
<!-- PARTIE GAUCHE DE LA PAGE -->
	<div id="gauche">

			<div id="l1"></div><div id="l2"></div><div id="l3"></div>
			
			<a href="index.php?page=accueil">L'Association</a>
			<a href="index.php?page=activite">Activiés</a>
			<a href="index.php?page=soutenir ">Nous soutenir</a>

			<div id="l4"></div><div id="l2"></div><div id="l1"></div>

			
	</div>
	

<div id="l5"></div>

</div>
<!-- MILIEU DE LA PAGE -->

	<div id="milieu">
			<B ><a id="nomAssoc" href="index.php?page=accueil">Help Association</a></B>
			<a href="index.php?page=accueil"><img src="img/logo.png" id="logo"/></a>
			<div id="recherche">
			<input type="text" id="bar" placeholder="Recherche..." /> 
			<img id="loupe" src="img/loupe.png" alt="" />
			</div>
		

	</div>
<div id="l5"></div>


<!-- PARTIE DROITE DE LA PAGE -->

	<div id="droite">
	<div id="l1"></div><div id="l2"></div><div id="l3"></div>
	<a href="index.php?page=contact">Nous contacter</a>
	<?php 
	if(!isset($_SESSION['id'])) { ?>
		<a href="index.php?page=connexion&action=connexion">Se connecter </a>
	<?php } else {?>
		<a href="deconnexion.php">Se deconnecter </a>
	<?php } ?>
	<a href="index.php?page=don">Faire un don</a>
				<div id="l4"></div><div id="l2"></div><div id="l1"></div>

	
	
	</div>

<!-- EN DESSOUS DE TOUT -->

</header>