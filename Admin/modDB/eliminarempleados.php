<?php 
 require_once "../../cabecera.php";
include '../../db.php';

                                            $nombre= $_GET['nombre'];
            
                                            $elimina = "DELETE FROM empleados where ID = '$nombre'";
                                            mysqli_query($conexion, $elimina);
                                            mysqli_close($conexion);
                                            ?>
 
 &nbsp;&nbsp;&nbsp;<label><h1>Eliminacion de empleado exitosa.</h1></label>
 <meta http-equiv="Refresh" content="3;../inicioadministrador.php">
 <?php
require_once "../../pie.php";
?>