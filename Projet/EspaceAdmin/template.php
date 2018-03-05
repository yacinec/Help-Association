<!DOCTYPE html>
<html>
<head>
	<title>Site Projet</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div id="espace-admin">	
	<?php
		include("header.php");
	?>	

			<?php 
			if(isset($_GET["page"])) {
				$module = new $nom_module(); 
			} ?>

		
	<?php
		include("footer.php");
	?>

	</div>
	
</body>
</html>