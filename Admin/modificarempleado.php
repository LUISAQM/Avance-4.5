<?php
require_once "../cabecera.php";
include('../db.php');
$id= $_GET['id'];
$sql="SELECT * from empleados where ID = '$id' ";
		        $result=mysqli_query($conexion,$sql);
                $mostrar=mysqli_fetch_array($result);
?>
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="container">
	<!-- Begin Logo -->
	<a class="navbar-brand" href="iniciousuariocuenta.php">Inicio
	</a>
	<!-- End Logo -->
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<!-- Begin Menu -->
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
			<a class="nav-link" href="../index.php">Cerrar Sesión <span class="sr-only">(current)</span></a>
			</li>

		</ul>
		<!-- End Menu -->
	</div>
</div>
</nav>
                            <h1>Ingrese datos</h1>
                                <form action="modDB/modificar.php?id=<?php echo $mostrar['ID']?>" method="POST"  enctype= "multipart/form-data">

                                    <input type="text" class="form-control mb-3" name="txtNombre" value="<?php echo $mostrar['nombre']?>" autofocus required>
                                    <input type="text" class="form-control mb-3" name="txApellido" value="<?php echo $mostrar['apellido_paterno']?>" autofocus required>
                                    <input type="text" class="form-control mb-3" name="txApellidoM" value="<?php echo $mostrar['apellido_materno']?>" autofocus required>
                                    <input type="text" class="form-control mb-3" name="Tel" value="<?php echo $mostrar['telefono']?>" autofocus required>
                                    <input type="text" class="form-control mb-3" name="txtDir" value="<?php echo $mostrar['direccion']?>" autofocus required>
                                    <input type="email" class="form-control mb-3" name="txtCorreo" value="<?php echo $mostrar['correo']?>" autofocus required>
                                    <input type="submit" class="btn btn-primary">	
                                </form>
								<a href="inicioadministrador.php"class="btn btn-info">Regresar</a><br>
                        </div>

   <?php

mysqli_close($conexion);
require_once "../pie.php";
?>