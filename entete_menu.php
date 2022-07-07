	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container-fluid">
		
		<?php include('../entete.php'); ?>
	<div class="navbar-collapse colapse">
		<!-- <ul class="nav navbar-nav navbar-right text-uppercase"> -->
		<ul class="nav navbar-nav navbar-left ">

			<li> 
				<a href="../public/public_index.php">   
					Accueil
				</a> 
			</li>

<?php	
	if(isset($_SESSION['user'])){
		include('menu_membres.php'); 
	}
?>

			<li> 
				<a href="../public/aide.php" title="Aide et à propos">     
					<span class="fa fa-question-circle"></span> 
				</a> 
			</li>
			
		</ul>
	</div>
</div>

	</nav>