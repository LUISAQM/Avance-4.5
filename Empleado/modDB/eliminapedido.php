<?php 
 require_once "../../cabecera.php";
include '../../db.php';
$nombre=$_GET['nombre'];
$usuario= $_GET['usuario'];
                                            $id=$_GET['id'];
                                            $elimina = "DELETE FROM pedidos where ID = '$id'";
                                            mysqli_query($conexion, $elimina);
                                            mysqli_close($conexion);
                                            ?>
 
 &nbsp;&nbsp;&nbsp;<label><h1>Eliminacion de pedido exitosa.</h1></label>
 <meta http-equiv="Refresh" content="1;../pedidos.php?usuario=<?php echo $usuario?>&&nombre=<?php echo $nombre?>">
 <?php
require_once "../../pie.php";
?>