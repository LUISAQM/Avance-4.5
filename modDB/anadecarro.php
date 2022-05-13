<?php
require_once "../../cabecera.php";

include('../../db.php');

$nombre_platillo=$_GET['id'];
$usuario= $_GET['usuario'];


$consulta = "SELECT* FROM menu where nombre = '$nombre_platillo' ";
$resultado= mysqli_query($conexion, $consulta);


$consulta2 = "SELECT* FROM usuarios where usuario = '$usuario' ";
$resultado2= mysqli_query($conexion, $consulta2);

    $mostrar1=mysqli_fetch_array($resultado);
    $mostrar2=mysqli_fetch_array($resultado2);
    $menu_id=$mostrar1['ID'];
    $menu_nombre=$mostrar1['nombre'];
    $cliente_id=$mostrar2['ID'];
    $cliente_nombre=$mostrar2['nombre'];
    $cliente_apellido1=$mostrar2['apellido_paterno'];
    $cliente_apellido2=$mostrar2['apellido_materno'];
    $cliente_correo=$mostrar2['correo'];
    $cliente_telefono=$mostrar2['telefono'];
    $cliente_direccion=$mostrar2['direccion'];
    $menu_precio=$mostrar1['precio'];
    $fov=false;


    $ingreso= "INSERT INTO pedidos VALUES ('0','$menu_id','$menu_nombre','$cliente_id','$cliente_nombre','$cliente_apellido1','$cliente_apellido2','$cliente_correo','$cliente_telefono','$cliente_direccion','$menu_precio','$usuario','$fov')";
    mysqli_query($conexion, $ingreso);
    ?>
    <meta http-equiv="Refresh" content="3;../iniciousuariocuenta.php?nombre=<?php echo $usuario?>">
    <?php

mysqli_free_result($resultado);
mysqli_close($conexion);




require_once "../../pie.php";
?>