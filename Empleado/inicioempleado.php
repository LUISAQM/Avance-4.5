<?php
include('../db.php');
include('../cabecera.php');
$usuario=$_GET['usuario'];
?>

<body>
<!--==========================================-->
<script type = "text/javascript">
	function ConfirmDeletePed()
	{
		var respuesta= confirm("¿Esta seguro de eliminar el pedido?")
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
	<!--==========================================-->
	
<!-- Begin Nav
================================================== -->
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="container">
	<!-- Begin Logo -->
	<a class="navbar-brand" href="index.php">Inicio
	</a>
	<!-- End Logo -->
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<!-- Begin Menu -->
		<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a class="nav-link" href="modificar.php?usuario=<?php echo $usuario?>">Modificar tus datos <span class="sr-only">(current)</span></a>
			</li>
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
		<h2><span>Men&uacute;</span></h2>
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
										<a href="modificarplatillo.php?usuario=<?php echo $usuario?>&&id=<?php echo $mostrar['ID']?>" class="btn btn-info">Modificar Platillo</a> 
										<a href="modDB/eliminaplatillo.php?usuario=<?php echo $usuario?>&&id=<?php echo $mostrar['ID']?>"><button type = "button" class="btn btn-danger" onclick="return ConfirmDeletePla()">Eliminar Platillo</button></a>
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
	<a href="agregarplatillo.php?usuario=<?php echo $usuario?>"class="btn btn-info">Agregar un platillo</a><br><br>
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
										<?php
										$var= $mostrar['usuario'];
										$sql2="SELECT * from pedidos where usuario = '$var' and activo = '1' ";
										$result2=mysqli_query($conexion,$sql2);
										$filas=mysqli_num_rows($result2);
										if($filas){
											?>
											  <a href="pedidos.php?nombre=<?php echo $mostrar['usuario']?>&&usuario=<?php echo $usuario?>"><button type="button" class="btn btn-info">Ver Pedidos del cliente</button></a>
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
	<!-- Begin 
	================================================== -->
		<?php
			mysqli_close($conexion);
		?>
	</section>


	 <!-- fin de sección -->
    </body>

	<!-- Begin Footer
	================================================== -->
    <?php
include('../pie.php');
?>