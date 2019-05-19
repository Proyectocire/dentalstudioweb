

<?php


if(isset($_POST["btn_login"])){
		require_once '../bd/conexion.php';

		$email = $_POST["email"];
		$password= $_POST["password"];

		$qrySelect = "SELECT id_user, usuario, nombre, apellidos, telefono, email, password FROM clientes";

		$result = mysqli_query($cn, $qrySelect);
		$row    = $result->fetch_assoc();

		$id_userbd  = $row["id_user"];
		$usuariobd  = $row["usuario"];
		$nombrebd   = $row["nombre"];
		$apellidosbd= $row["apellidos"];
		$emailbd    = $row["email"];
		$passwordbd = $row["password"];



		if($password == $passwordbd && $email == $emailbd) {
			include "../bd/inicioSesion.php";
			#echo "Bienvenido al sistema ".$apellidosbd . " " . $nombrebd;
			
			

			#header("Location: Login.php");
		} else {
			#echo "NO ESTAS AUTORIZADO";
			 echo '<div class="alert alert-danger">Oops! It looks like your username and/or password are incorrect. Please try again.</div>';
		}

	}
