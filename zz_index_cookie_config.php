<?php    
	$cookies_name="ewane_cookie";
	$val="";
	if(isset($_COOKIE[$cookies_name])){
		$val=$_COOKIE[$cookies_name];
		setcookie($cookies_name,"",time()-1000000000);
	}
    include('fonctions/fonctions_DATE.php');
    include('fonctions/fonctions_PHP.php');
	$hr_local_ok=getTempsLocalFr();
	$val=$hr_local_ok."#".$val;
	setcookie($cookies_name,$val,time()+3600000);

	$val_cookie=$val;
?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1"  />
		<meta charset="utf-8" />
		<title>Configurer</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/MonStyle.css">
	</head>
	<body>	
		<br/>	
		<div class="container col-md-4 col-md-offset-4">
				<div class="panel-body">
				
					<form method="post" action="configurations/configurer.php" class="form">									
						<button type="submit" class="btn btn-primary btn-block">Ouvrir / Configurer</button>					
					</form>
				</div>		
		
				<div class="panel panel-primary">
					<div >
						<h3>COOKIE : Historique d'ouverture du site en local</h3>
						<?php		
							$p=1;				
							$tab_val=explode('#',$val_cookie);
							foreach ($tab_val as $val) {
							$v=phpversion();
							$n=php_sapi_name();
							$st=is_session_started();

							$sts=($st===TRUE)?"TRUE":"FALSE";

							echo("".$p."-      ".$val."_".$v."_".$n."_".$sts."<br/>");
							$p++;
							}

						?>
					</div>
				</div>			
			</div>
	</body>
</html>
