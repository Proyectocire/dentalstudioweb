<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbdata = "dsweb";

	$cn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbdata);
	if(!$cn){
		die("Conexion inexistente, vuelva a intentarlo mas tarde...");
		exit();
	}
?>

