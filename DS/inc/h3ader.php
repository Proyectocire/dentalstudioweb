

<!--------------------INICIO HEADER-MENU DE PÁGINA---------------------->
<!----------------------------------------------------------------->
<!----------------------------------------------------------------->
<div class="div">
	<header id="main-header" >
		<div id="nav">
			<a href="Principal.php"><!--REDIRECCIÓN A INICIO-->
				<img class="tamaño_logo" src="img/logoDental.png"> <!--LOGO-->
			</a>
			<ul>

				<a href="Contacto.php">Contacto</a>
				<a href="Precios.php">Precios</a>
				<a href="Ubicacion.php">Ubicación</a>
				<a href="Galeria.php">Galeria</a>
				<a href="FAQ.php">FAQ</a>
				<a href="Login.php">Login</a>
				<a href="">
					<?php 
						if($_SESSION['logueado'] == "erick")
							echo $_SESSION['logueado']; 
					?>
				</a>
				
			</ul>
		</div>

		
	</header>
</div>
<!----------------------FIN HEADER DE PÁGINA----------------------->
<!----------------------------------------------------------------->
<!----------------------------------------------------------------->
