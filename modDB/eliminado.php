<?php 
 require_once "../../cabecera.php";
include '../../db.php';

                                            $nombre= $_GET['nombre'];
            
                                            $elimina = "DELETE FROM usuarios where usuario = '$nombre'";
                                            mysqli_query($conexion, $elimina);
                                            mysqli_close($conexion);
                                            ?>
 
 &nbsp;&nbsp;&nbsp;<label><h1>Eliminacion de usuario exitosa.</h1></label>
 <meta http-equiv="Refresh" content="3;../../index.php">
 <?php
require_once "../../pie.php";
?>