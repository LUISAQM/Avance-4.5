<?php
require_once "../../cabecera.php";

include('../../db.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];


$consulta = "SELECT* FROM empleados where usuario = '$USUARIO' and password ='$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);
$mostrar=mysqli_fetch_array($resultado);
$filas=mysqli_num_rows($resultado);

if($filas){
    ?>
    <meta http-equiv="Refresh" content="3;../inicioempleado.php?usuario=<?php echo $mostrar['usuario']?> ">
    <?php
}else{
    ?>
    <h1>ERROR DE AUTENTIFICACION</h1>
    <meta http-equiv="Refresh" content="3;../../index.php">
    <?php

    
}
mysqli_free_result($resultado);
mysqli_close($conexion);




require_once "../../pie.php";
?>