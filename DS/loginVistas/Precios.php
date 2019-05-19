<!DOCTYPE html>
<html>
<head>
	<title>Precios</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="cssd/h3ader_footer.css"><!--LLAMA AL ARCHIVO CSS DE HEADER, FOOTER Y DETALLES DE LAP PÁGINA-->
	<link rel="stylesheet" type="text/css" href="cssd/Precios.css"><!--LLAMA AL ARCHIVO CSS PARA DISEÑO EXCLUSIVO DE LA PÁGINA-->
</head>
<body>



<!--- HEADER ---->
<?php  										//$titulo = "HOTEL";
	require_once 'inc/h3ader.php';
?>
<!--- HEADER ---->


	<h1 align="center">Precios </h1>
	<table align="center" width="80%" border="1" cellspacing="0" cellpadding="0">

		<td><p>Tipo de Tratamiento</p></td>
			<td colspan="2"><p>Precios</p></td> <!-- <td colspan="2"> -->
		

		<tr>
			<td><p>Trabajos Dentales Genericos</p></td> <!-- <td rowspan="2"> -->
			<td><p>$1400</p></td>
			
		</tr>
		

		<tr>
			<td><p>Corona Metal Porcelana</p></td>
			<td><p>$1044</p></td>
		
		</tr>
		<tr>
			<td><p>Corona Metalica</p></td>
			<td><p>$464</p></td>
		</tr>

		<tr>
			<td><p>Endopostes</p></td>
			<td><p>$348</p></td>
			
		</tr>
		<tr>
			<td><p>Incrustaciones</p></td>
			<td><p>$464</p></td>
			
		</tr>

		<tr>
			<td><p>Provisionales</p></td>
			<td><p>$69</p></td>
			
		</tr>
		

	</table>



<!--- FOOTER ---->
<?php
	require_once 'inc/footer.php';
?>
<!--- FOOTER ---->