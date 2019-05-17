<!DOCTYPE html>
<html>
<head>
	<title>									
		Login
	</title>
	<meta charset="utf-8">
	
    <link rel="stylesheet" type="text/css" href="libs/bt/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="cssd/h3ader_footer.css"><!--LLAMA AL ARCHIVO CSS DE HEADER, FOOTER Y DETALLES DE LAP PÁGINA-->
    <link rel="stylesheet" type="text/css" href="cssd/Login.css"><!--LLAMA AL ARCHIVO CSS PARA DISEÑO EXCLUSIVO DE LA PÁGINA-->

</head>

<body>


                                      
<?php

    require_once 'bd/conexion.php';
?>
<!--SQL+PHP-->
<?php
    require_once 'sql/SQLLogin.php';
?>

<!--- HEADER ---->
<?php                                       
    require_once 'inc/h3ader.php';
?>
<!--- HEADER ---->

<!--SQL+PHP-->

<!--- LOGIN/REGISTRO ---->
<?php 
    require_once 'inc/rl.php';
?>
<!--- LOGIN/REGISTRO ---->

<!--- FOOTER ---->
<?php
	require_once 'inc/footer.php';
?>
<!--- FOOTER ---->