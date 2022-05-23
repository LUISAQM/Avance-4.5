<?php
require_once "../../cabecera.php";

include('../../db.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];

$consulta = "SELECT* FROM administradores where usuario = '$USUARIO' and password ='$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    ?>
    <meta http-equiv="Refresh" content="1;../inicioadministrador.php">
    <?php
}else{
    ?>
    <h1>ERROR DE AUTENTIFICACION</h1>
    <meta http-equiv="Refresh" content="1;../../index.php">
    <?php

    
}
mysqli_free_result($resultado);
mysqli_close($conexion);

require_once "../../pie.php";
?>