<?php 
 require_once "../../cabecera.php";
include '../../db.php';

                                    
                                            $usuario= $_GET['usuario'];
                                            $elimina = "DELETE FROM pedidos where activo = '0' and usuario = '$usuario'";
                                            mysqli_query($conexion, $elimina);
                                            mysqli_close($conexion);
                                            ?>
 
 &nbsp;&nbsp;&nbsp;<label><h1>Eliminacion de carrito exitosa.</h1></label>
 <meta http-equiv="Refresh" content="1;../carrito.php?nombre=<?php echo $usuario?>">
 <?php
require_once "../../pie.php";
?>