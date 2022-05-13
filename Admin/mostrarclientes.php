<?php
	require_once "../cabecera.php";
    include('../db.php');
?>
<tbody>
<table class="marco" border="1" >
<tr>
			<td>ID cliente</td>
			<td>Nombre</td>
            <td>Apellido Paterno</td>
            <td>Apellido Materno</td>
            <td>Telefono</td>
			<td>Direcci&oacute;n</td>
            <td>Correo</td>
            <td>Usuario</td>
            <td>Contrase&ntilde;a</td>
		</tr>

		<?php 
		$sql="SELECT * from usuarios";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
        <center>
		<tr>
			<td><?php echo $mostrar['ID'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido_paterno'] ?></td>
			<td><?php echo $mostrar['apellido_materno'] ?></td>
            <td><?php echo $mostrar['telefono'] ?></td>
            <td><?php echo $mostrar['direccion'] ?></td>
            <td><?php echo $mostrar['correo'] ?></td>
            <td><?php echo $mostrar['usuario'] ?></td>
            <td><?php echo $mostrar['contra'] ?></td>
		</tr>
        </center>
        <br>
        <?php 
	}
?>
 </table>
    <a href="inicioadministrador.php"class="menu">Regresar</a><br>