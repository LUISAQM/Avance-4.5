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
	<section class="featured-posts" id="Menu">
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
		<a href="agregarplatillo.php"class="btn btn-info">Agregar un platillo</a><br><br>
	</section>

	<!-- Begin 
	================================================== -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span>Clientes y Pedidos</span></h2>
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
										<?php
										$var= $mostrar['usuario'];
										$sql2="SELECT * from pedidos where usuario = '$var' and activo = '1' ";
										$result2=mysqli_query($conexion,$sql2);
										$filas=mysqli_num_rows($result2);
										if($filas){
											?>
											  <a href="pedidos.php?nombre=<?php echo $mostrar['usuario']?>"><button type="button" class="btn btn-info">Ver Pedidos del cliente</button></a>
											  <?php
										}else{
											?>
											<h6>Este cliente no tiene pedidos actualmente</h6>
											<?php
										}
										?>
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
										<a href="modificarempleado.php?id=<?php echo $mostrar['ID']?>"><button type="button" class="btn btn-info">Modificar información</button></a>
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