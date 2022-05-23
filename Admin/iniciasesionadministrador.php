<!DOCTYPE html>
<html lang="es-mx">
<?php
include('../db.php');
include('../cabecera.php');
?>
<body>

<!-- Begin Nav
================================================== -->
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="container">
	<!-- Begin Logo -->
	<a class="navbar-brand" href="../index.php">Inicio
	</a>
	<!-- End Logo -->
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<!-- Begin Menu -->
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
			<a class="nav-link" href="../index.php">Inicio<span class="sr-only">(current)</span></a>
			</li>
		</ul>
		<!-- End Menu -->
	</div>
</div>
</nav>
<!-- End Nav
================================================== -->

<!-- Begin Site Title
================================================== -->
<div class="container">
	<div class="mainheading">
		<h1 class="sitetitle">RestaurantITO</h1>
		<p class="lead">
			 Proyecto de Programaci&oacute;n Web
		</p>
	</div>
</div>
<div class="container">
	<div class="mainheading">
		<h1 class="sitetitle">Ingrese sus datos</h1>
		<p class="lead">
		<div class="centro">
            <main>
                <section>
                     <header>
					Para visualizar los precios y poder realizar alg&uacute;na modificación es necesario que inicie sesión administrador
                    <br/>
					Si usted no es administrador, por favor vuelva a la página anterior
					<br/><br/><br/>
					<form action="modDB/validaradmin.php" method= "post" >
						<label for="txtIdCve">Usuario:</label>
						<input type="text" id="txtIdCve" name="usuario" autofocus required/>
						<br/>
						<label for="txtIdPwd">Contrase&ntilde;a:</label>
						<input type="password" id="txtIdPwd" name="password" required/>
						<br/>
						<input type="submit" value="Enviar" id="idBtnEnviar"/>
                </section>
            </main>
        </div>
		</p>
	</div>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
<?php 
	
	require_once "../pie.php";
?>