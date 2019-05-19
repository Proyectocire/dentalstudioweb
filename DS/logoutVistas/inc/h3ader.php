

<!--------------------INICIO HEADER-MENU DE PÁGINA----------------->
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
				<a href="../loginVistas/Login.php">
					
					Logout



				</a>

				<a href="#">
					<?php
						session_start(); 
						echo $_SESSION['id_user'];
					?>
				</a>
				
				
				
				
			</ul>
		</div>

		
	</header>
</div>
<!----------------------FIN HEADER DE PÁGINA----------------------->
<!----------------------------------------------------------------->
<!----------------------------------------------------------------->
