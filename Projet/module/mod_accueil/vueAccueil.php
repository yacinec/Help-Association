 <?php

	require_once("include/vueGenerique.php");

	class VueAccueil extends VueGenerique {

		function __construct() {

		}

		function afficher(){
		?>

		<section id="corps">
			<section class="accueil1">

			<h1> WELCOME TO HELP ASSOCIATION </h1>


			
				<div id="l1"></div>
				<div id="l2"></div>
				<div id="l1"></div>


				<div class="zoneImage">

				<div class="slideshow">
					<ul>
						<li><img class="slide" src="img/cv.jpeg" alt="" width="350" height="200" /></li>
						<li><img class="slide" src="img/motiv.jpeg" alt="" width="350" height="200" /></li>
						<li><img class="slide" src="img/solidarity.jpeg" alt="" width="350" height="200" /></li>
						<li><img class="slide" src="img/immi.png" alt="" width="350" height="200" /></li>
					</ul>
				</div>
		
			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
			<script type="text/javascript">
  			 $(function(){
    		  setInterval(function(){
       		  $(".slideshow ul").animate({marginLeft:-350},800,function(){
           	 $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
       		  })
    		  }, 3500);
  			 });
			</script>
			<div class="zoneTexte">
				<h3> AGENDA </h3>
					<p><strong>Accompagnement à l'élaboration et à la rédaction de CV et Lettres de Motivations<br/>
					<br>Permanence tous les samedis de 10h à 13h Sans rendez-vous</strong>
					Contact HELP ASSOCIATION<br/>Tél: 02 75 48 21 14 <br />Email : HelpAssociation93@gmail.com</p></div>
			</div>

		


						<a href="http://localhost/SiteProjet/index.php?page=don"><img class="don" src="img/don.png"> </a>	
		</section> 	
		</section> 


		<?php
		}
		function afficherDernierArticle($dernierArticle){
			

				$donnee = $dernierArticle->fetch();
				echo $donnee["titre"];
	
		}
	}
?>


	