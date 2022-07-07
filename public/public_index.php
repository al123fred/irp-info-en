<?php
    include('../configurations/valeurs_fixes.php');
    include('../fonctions/fonctions_SECURITY.php');

    global $valeur_public_global;
    authentifie($valeur_public_global);
?>
<!DOCTPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Acceuil </title> 
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/monStyle.css">
		<script src="../js/jquery-1.10.2.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		
	</head>
		
	<body background="../images/photo.pngs">
	
		<?php include('../entete_menu.php'); ?>
		<br><br><br/><br/><br/>

		<p align="center">
		    	<img src="../images/im09.jpg" height="150px">
		    	<img src="../images/coordo.png" height="150px">
		    	<img src="../images/im06.jpg" height="150px">
		</p>

		<div class="container" style="margin-left: 0;">
		            <div class="row my-row" >
		                <div class="control-label col-sm-10">
		<?php
				include('presentation_irp.php'); 
		?>
						</div>
		                <div class="control-label col-sm-2">
		<?php
				include('actualites.php'); 
		?>
						</div>
					</div>
		</div>

	</body>
</html>



