<?php
require_once "../cabecera.php";
include('../db.php');
$nombre= $_GET['nombre'];
$sql="SELECT * from usuarios where usuario = '$nombre' ";
		        $result=mysqli_query($conexion,$sql);
                $mostrar=mysqli_fetch_array($result);
?>
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="container">
	<!-- Begin Logo -->
	<a class="navbar-brand" href="iniciousuariocuenta.php?nombre=<?php echo $nombre?>">Inicio
	</a>
	<!-- End Logo -->
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<!-- Begin Menu -->
		<ul class="navbar-nav ml-auto">
            <li class="nav-item active">
			<a class="nav-link" href="modificar.php?nombre=<?php echo $nombre?>">Modificar tus datos <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
			<a class="nav-link" href="../index.php">Cerrar Sesión <span class="sr-only">(current)</span></a>
			</li>

		</ul>
		<!-- End Menu -->
	</div>
</div>
<script type = "text/javascript">
	function ConfirmDelete()
	{
		var respuesta= confirm("¿Esta seguro de eliminar su cuenta?")
		if (respuesta==true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	</script>
</nav>
                            <h1>Ingrese datos</h1>
                                <form action="modDB/modificar.php?nombre=<?php echo $mostrar['usuario']?>" method="POST"  enctype= "multipart/form-data">

                                    <input type="text" class="form-control mb-3" name="txtNombre" value="<?php echo $mostrar['nombre']?>" autofocus required>
                                    <input type="text" class="form-control mb-3" name="txApellido" value="<?php echo $mostrar['apellido_paterno']?>" autofocus required>
                                    <input type="text" class="form-control mb-3" name="txApellidoM" value="<?php echo $mostrar['apellido_materno']?>" autofocus required>
                                    <input type="text" class="form-control mb-3" name="Tel" value="<?php echo $mostrar['telefono']?>" autofocus required>
                                    <input type="text" class="form-control mb-3" name="txtDir" value="<?php echo $mostrar['direccion']?>" autofocus required>
                                    <input type="email" class="form-control mb-3" name="txtCorreo" value="<?php echo $mostrar['correo']?>" autofocus required>
                                    <input type="submit" class="btn btn-primary">	
                                </form>
								<a href="iniciousuariocuenta.php?nombre=<?php echo $nombre ?>"class="btn btn-info">Regresar</a><br>
								<a href="modDB/eliminado.php?nombre=<?php echo $nombre ?>"><button type="button" class="btn btn-danger" onclick = "return ConfirmDelete()">Eliminar tu cuenta</button></a>
                        </div>

   <?php

mysqli_close($conexion);
require_once "../pie.php";
?>