<?php
include('../db.php');
include('../cabecera.php');
?>

<body>
<!-- Alert confirmacia accion
================================================ -->	
<script type = "text/javascript">
	function ConfirmDeleteEmp()
	{
		var respuesta= confirm("¿Esta seguro de eliminar al usuario empleado?")
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

<script type = "text/javascript">
	function ConfirmDeleteCli()
	{
		var respuesta= confirm("¿Esta seguro de eliminar al usuario cliente?")
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

<script type = "text/javascript">
	function ConfirmDeletePla()
	{
		var respuesta= confirm("¿Esta seguro de eliminar este platillo del menu?")
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
<!-- End Alert
================================================== -->

<!-- Begin Nav
================================================== -->
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="container">
	<!-- Begin Logo -->
	<a class="navbar-brand" >Inicio
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
<!-- End Nav
================================================== -->

<!-- Begin Site Title
================================================== -->
<div class="container">
	<div class="mainheading">
		<h1 class="sitetitle">RestaurantIto</h1>
		<p class="lead">
			 Proyecto de Programaci&oacute;n Web
</p>
	</div>
<!-- End Site Title
================================================== -->

	<!-- Begin 
	================================================== -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span>Menu</span></h2>
	</div>
	<div class="card-columns listfeaturedtag">

		<!-- begin post -->
		<?php 
		        $sql="SELECT * from menu";
		        $result=mysqli_query($conexion,$sql);
		        while($mostrar=mysqli_fetch_array($result)){
		?>
		<div class="card">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
						<div class="thumbnail" style="background-image:url('data:image/png;base64, <?php echo base64_encode($mostrar['imagen']);?>');">
						</div>
				</div>
				<div class="col-md-7">
					<div class="card-block">
						<h2 class="card-title"><?php echo $mostrar['nombre'] ?></a></h2>
						<h4 class="card-text">
                                        Nombre: <?php echo $mostrar['nombre'] ?> <br/>
                                        Tipo: <?php echo $mostrar['tipo'] ?><br/>
                                        Tama&ntilde;o de porci&oacute;n: <?php echo $mostrar['porcion'] ?> <br/> 
                                        Precio: <?php echo $mostrar['precio'] ?> <br>
                                        Descripci&oacute;n: <?php echo $mostrar['descripcion'] ?> <br>
									<a href="modificarplatillo.php?id=<?php echo $mostrar['ID']?>" class="btn btn-info">Modificar Platillo</a> 
									<a href="modDB/eliminaplatillo.php?id=<?php echo $mostrar['ID']?>"><button type = "button" class="btn btn-danger" onclick="return ConfirmDeletePla()">Eliminar Platillo</button></a>
						<div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->
		<?php
			}
		?>
	</section>
	<a href="agregarplatillo.php"class="btn btn-info">Agregar un platillo</a><br><br>
	 <!-- fin de sección -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span>Pedidos</span></h2>
	</div>
	<div class="card-columns listfeaturedtag">

		<!-- begin post -->
		<?php
		$sql="SELECT * from pedidos";
		$result=mysqli_query($conexion,$sql);
		$filas=mysqli_num_rows($result);
		if($filas){ 
		while($mostrar=mysqli_fetch_array($result)){
            $nombre_platillo= $mostrar['nombre_platillo'];
            $sql2="SELECT * from menu where nombre='$nombre_platillo'";
		    $result2=mysqli_query($conexion,$sql2);
            $mostrar2=mysqli_fetch_array($result2);
		 ?>
		<div class="card">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
						<div class="thumbnail" style="background-image:url('data:image/png;base64, <?php echo base64_encode($mostrar2['imagen']);?>');">
						</div>
				</div>
				<div class="col-md-7">
					<div class="card-block">
						<h2 class="card-title"><?php echo $mostrar['nombre_usuario'] ?> <?php echo $mostrar['apellido_paterno'] ?> <?php echo $mostrar['apellido_materno']?></a></h2>
						<h4 class="card-text">
								ID del pedido: <?php echo $mostrar['ID']?></br>
								Nombre del platillo: <?php echo $mostrar['nombre_platillo'] ?></br>
								Direccion: <?php echo $mostrar['direccion'] ?></br>
								Telefono: <?php echo $mostrar['telefono'] ?></br>
								Correo: <?php echo $mostrar['correo'] ?></br></h4>
								Precio: <?php echo $mostrar['precio'] ?><br></h4>
						<div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="modDB/eliminapedido.php?id=<?php echo $mostrar['ID']?>" class="btn btn-danger" onclick="return ConfirmDeleteCli()">Eliminar pedido</a></th> 
								</span>    
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->
		<?php
			}
		}
		else{
			?>
			<h2>No existen pedidos actualmente</h2>
			<?php
		}
		?>
	</section>

	<!-- Begin 
	================================================== -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span>Clientes</span></h2>
	</div>
	<div class="card-columns listfeaturedtag">

		<!-- begin post -->
		<?php 
		        $sql="SELECT * from usuarios";  
		        $result=mysqli_query($conexion,$sql);
		        while($mostrar=mysqli_fetch_array($result)){
		?>
		<div class="card">
			<div class="row">
				<div class="col-md-5">
					<div class="card-block">
                        <h2 class="card-title"><?php echo $mostrar['nombre'] ?> <?php echo $mostrar['apellido_paterno'] ?> <?php echo $mostrar['apellido_materno']?></a></h2>
						<h4 class="card-text">
										Telefono: <?php echo $mostrar['telefono'] ?>. <br/>
                                        Direccion: <?php echo $mostrar['direccion'] ?><br/>
                                        Correo: <?php echo $mostrar['correo'] ?>. <br/>
                                        <a href="modDB/eliminado.php?nombre=<?php echo $mostrar['ID']?>"><button type="button" class="btn btn-danger" onclick="return ConfirmDeleteCli()">Eliminar la cuenta del cliente</button></a>
						<div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			}
		?>
		</section>
        <section class="featured-posts">
	<div class="section-title">
		<h2><span>Empleados</span></h2>
	</div>
	<div class="card-columns listfeaturedtag">
		<!-- end post -->
		
		<!-- begin post -->
		<?php 
		        $sql="SELECT * from empleados";
		        $result=mysqli_query($conexion,$sql);
		        while($mostrar=mysqli_fetch_array($result)){
		?>
		<div class="card">
			<div class="row">
				<div class="col-md-5">
					<div class="card-block">
                        <h2 class="card-title"><?php echo $mostrar['nombre'] ?> <?php echo $mostrar['apellido_paterno'] ?> <?php echo $mostrar['apellido_materno']?></a></h2>
						<h4 class="card-text">
										Telefono: <?php echo $mostrar['telefono'] ?>. <br/>
                                        Direccion: <?php echo $mostrar['direccion'] ?><br/>
                                        Correo: <?php echo $mostrar['correo'] ?>. <br/>
                                        <a href="modDB/eliminarempleados.php?nombre=<?php echo $mostrar['ID']?>"> <button type = "button" class="btn btn-danger" onclick="return ConfirmDeleteEmp()">Eliminar empleado</button></a>	
						<div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->
		<?php
			}
			mysqli_close($conexion);
		?>
			<a href="registrarempleado.php" class="btn btn-info">Agregar Empleado</a>
	</section>
	 <!-- fin de sección -->
    </body>

	<!-- Begin Footer
	================================================== -->
    <?php
include('../pie.php');
?>