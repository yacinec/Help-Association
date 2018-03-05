<!DOCTYPE html>
<html>
<head>
	<title>Site Projet</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php
	if(isset($_GET["page"])) {
		
		if( $_GET["page"] != "espaceadmin" ) { 


			include("header.php");

			?> 
			<div id="page"> 

			<div id="pp">
			<?php include("aside.php"); ?>
			</div>
			<div id="p"><?php $module = new $nom_module(); ?>
			</div></div>

			<?php 
			include("footer.php");?>
			?></div><?php

		} else {
			$module = new $nom_module();
		}
	} else {
		include("header.php");
		
		?><div id="page">
		</div><?php

		include("aside.php");
		
		include("footer.php");
	} ?>
	
</body>
</html>
