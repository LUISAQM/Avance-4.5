<?php
require_once "../../cabecera.php";

include('../../db.php');

$nombre_platillo=$_GET['id'];
$usuario= $_GET['usuario'];
$cantidad= $_POST['cantida'];
for ($i = 0; $i < $cantidad; $i++) {

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


    $ingreso= "INSERT INTO pedidos VALUES (' ','$menu_id','$menu_nombre','$cliente_id','$cliente_nombre','$cliente_apellido1','$cliente_apellido2','$cliente_correo','$cliente_telefono','$cliente_direccion','$menu_precio','$usuario','0')";
    mysqli_query($conexion, $ingreso);
    mysqli_free_result($resultado);
    }   
    ?>
     &nbsp;&nbsp;&nbsp;<label><h1>Añadido con exito.</h1></label>
    <meta http-equiv="Refresh" content="1;../iniciousuariocuenta.php?nombre=<?php echo $usuario?>">
    <?php



mysqli_close($conexion);




include("../../pie.php");
?>