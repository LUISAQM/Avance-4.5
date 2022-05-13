<?php 
 require_once "../../cabecera.php";
include '../../db.php';

                                            $usuario= $_GET['usuario'];
                                            $sn=true;
                                            $update= "UPDATE pedidos set activo='$sn' where '$usuario' like usuario";
                                            mysqli_query($conexion, $update);
                                            mysqli_close($conexion);
                                            ?>
 
 &nbsp;&nbsp;&nbsp;<label><h1>Pedido exitoso.</h1></label>
 <meta http-equiv="Refresh" content="3;../iniciousuariocuenta.php?nombre=<?php echo $usuario?>">
 <?php
require_once "../../pie.php";
?>