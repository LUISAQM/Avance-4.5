<?php
include('../db.php');
include('../cabecera.php');
$usuario=$_GET['nombre'];
?>

<body>
<script type = "text/javascript">
	function ConfirmDeletePla()
	{
		var respuesta= confirm("¿Esta seguro de eliminar el platillo?")
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

<!-- Begin Nav
================================================== -->
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="container">
	<!-- Begin Logo -->
	<a class="navbar-brand" href="iniciousuariocuenta.php?nombre=<?php echo $usuario?>">Inicio
	</a>
	<!-- End Logo -->
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<!-- Begin Menu -->
		<ul class="navbar-nav ml-auto">
            <li class="nav-item active">
			<a class="nav-link" href="modificar.php?nombre=<?php echo $usuario?>">Modificar tus datos <span class="sr-only">(current)</span></a>
			</li>			
			<li class="nav-item active">
			<a class="nav-link" href="carrito.php?nombre=<?php echo $usuario?>">Carrito <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
			<a class="nav-link" href="../index.php">Cerrar Sesión <span class="sr-only">(current)</span></a>
			</li>

		</ul>
		<!-- End Menu -->
	</div>
</div>
</nav>
<body>
<div class="container">
	<div class="mainheading">
		<h1 class="sitetitle">RestaurantIto</h1>
		<p class="lead">
			 Bienvenid@: <?php echo $usuario?>
		</p>
	</div>
<!-- End Site Title-->
<section class="featured-posts">
	<div class="section-title">
		<h2><span>Carrito</span></h2>
	</div>
	<div class="card-columns listfeaturedtag">

		<!-- begin post -->
		<?php
        $total=0;
		$sql="SELECT * from pedidos where usuario = '$usuario' and activo = '0' ";
		$result=mysqli_query($conexion,$sql);
		$filas=mysqli_num_rows($result);
		if($filas){ 
		while($mostrar=mysqli_fetch_array($result)){
            $nombre_menu= $mostrar['nombre_platillo'];
            $sql2="SELECT * from menu where nombre='$nombre_menu'";
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
								Nombre del platillo: <?php echo $mostrar['nombre_platillo'] ?></br>
								Direccion: <?php echo $mostrar['direccion'] ?></br>
								Telefono: <?php echo $mostrar['telefono'] ?></br>
								Correo: <?php echo $mostrar['correo'] ?></br></h4>
								Precio: <?php echo $mostrar['precio'] ?><br></h4>
                                <?php  $total=$total+ floatval($mostrar['precio']) ?>
                                
						<div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="modDB/eliminacarrito.php?id=<?php echo $mostrar['ID']?>&nombre=<?php echo $usuario?>"><botton type="button" class="btn btn-danger" onclick="return ConfirmDeletePla()">Eliminar elemento</button></a></th> 
                                
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
            ?>
            <h2>El total es <?php echo $total?> pesos </h2>
            <a href="modDB/confirmapedido.php?usuario=<?php echo $usuario?>"class="btn btn-info">Hacer el pedido</a>
            <?php
		}
		else{
			?>
			<h2>No hay artículos en el carrito actualmente</h2>
			<?php
		}
			mysqli_close($conexion);
		?>
	</section>
    <a href="iniciousuariocuenta.php?nombre=<?php echo $usuario?>" class="btn btn-info">Regresar</a>
    </body>

