<?php
include('../db.php');
include('../cabecera.php');
$usuario=$_GET['nombre'];
$sql="SELECT * from pedidos where usuario = '$usuario' and activo = '1' ";
									$result=mysqli_query($conexion,$sql);
									$filas=mysqli_num_rows($result);
?>
<script type = "text/javascript">
	function ConfirmDeleteArt()
	{
		var respuesta= confirm("¿Esta seguro de eliminar el articulo?")
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
	function ConfirmDeletePed()
	{
		var respuesta= confirm("¿Esta seguro de eliminar el pedido (ESTA OPCION ELIMINARA TODOS LOS ARTICULOS?")
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
    
<body>
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
<body>
<div class="container">
	<div class="mainheading">
		<h1 class="sitetitle">RestaurantIto</h1>
		<p class="lead">
			 Proyecto de Programaci&oacute;n Web
</p>
	</div>

<div class="section-title">
		<h2><span>Pedidos</span></h2>
	</div>

		<!-- begin post -->
        <?php
        if($filas){
        ?>
		<table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Imagen</th>
                                        <th>Nombre del platillo</th>
                                        <th>Nombre</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
										<th>Direccion</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>

                                <tbody>
								<?php
									$sql="SELECT * from pedidos where usuario = '$usuario' and activo = '1' ";
									$result=mysqli_query($conexion,$sql);
									$filas=mysqli_num_rows($result);
									while($mostrar=mysqli_fetch_array($result)){
          							  $nombre_platillo= $mostrar['nombre_platillo'];
          							  $sql2="SELECT * from menu where nombre='$nombre_platillo'";
		 							  $result2=mysqli_query($conexion,$sql2);
            						  $mostrar2=mysqli_fetch_array($result2);
		 						?>
                                            <tr>
                                                <td><?php echo $mostrar['ID'] ?></td>
                                                <td> <img src="data:image/jpg;base64, <?php echo base64_encode($mostrar2['imagen']); ?>"/></td>
                                                <td><?php echo $mostrar['nombre_platillo'] ?></td>
                                                <td><?php echo $mostrar['nombre_usuario'] ?>
                                                <td><?php echo $mostrar['apellido_paterno'] ?></td>
                                                <td><?php echo $mostrar['apellido_materno'] ?></td>
                                                <td><?php echo $mostrar['correo'] ?></td>
                                                <td><?php echo $mostrar['telefono'] ?></td>   
												<td><?php echo $mostrar['direccion'] ?></td>  
												<td><?php echo $mostrar['precio'] ?><br><br><br>
                                                <a href="modDB/eliminapedido.php?id=<?php echo $mostrar['ID']?>"><button type="button" class="btn btn-danger" onclick="return ConfirmDeleteArt()">Eliminar articulo</button></a></th> 
                                                </td> 
                                            </tr>
                         
                                        <?php 
                                    }
                                    ?>
                                    <a href="modDB/pedidosurtido.php?usuario=<?php echo $usuario?>"><button type="button" class="btn btn-danger" onclick="return ConfirmDeletePed() ">Pedido Surtido</button></a>
                                    <?php      
                                        }else{
                                                ?> 
                                                <H2> Este cliente no tiene pedido</h2><br>
                                                <?php
                                            }
                                        ?>
                            <a href="inicioadministrador.php"><button type="button" class="btn btn-info">Regresar</button></a>   
                                            </tbody>
                            </table>
</body>
 <?php
    include("../pie.php");
?>
