<?php 
 require_once "../../cabecera.php";
include '../../db.php';

                                            $usuario=$_GET['usuario'];
                                            $elimina = "DELETE FROM pedidos where usuario = '$usuario' and activo = '1'";
                                            mysqli_query($conexion, $elimina);
                                            mysqli_close($conexion);
                                            ?>
 
 &nbsp;&nbsp;&nbsp;<label><h1>Eliminacion de pedido exitosa.</h1></label>
 <meta http-equiv="Refresh" content="1;../pedidos.php?usuario=<?php echo $usuario?>">
 <?php
require_once "../../pie.php";
?>