		<div class="navbar-header" >
				<!-- <a  class="navbar-brand" href="#"> -->
				<font  class="navbar-brand" style="color: #ddeeee;">
					<span class="fa fa-institution"></span>
						<b>IRP - INFO </b>
						<i>(DRES - Extrême-Nord)</i>
				</font>

				<font style="color: #faaa12; padding-top: 5;padding-left: 50;">
<?php	

		if(isset($_SESSION['user'])){
		$user=$_SESSION['user'];
		$login=$user['login'];
		$role=$user['role'];
		echo "user : <b>".$login."</b>(".$role.")";

		include('bouton_deconnexion.php'); 
		}
		else{
		include('bouton_connexion.php'); 
		}
?>
			</font>

		</div>
