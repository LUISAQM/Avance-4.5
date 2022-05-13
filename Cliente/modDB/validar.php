<?php
require_once "../../cabecera.php";

include('../../db.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];


$consulta = "SELECT* FROM usuarios where usuario = '$USUARIO' and contra ='$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    $mostrar=mysqli_fetch_array($resultado);
    ?>
    <meta http-equiv="Refresh" content="3;../iniciousuariocuenta.php?nombre=<?php echo $mostrar['usuario']?>">
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