<?php 
 require_once "../../cabecera.php";
include '../../db.php';
$usuario= $_GET['usuario'];

                                            $id=$_GET['id'];
                                            $elimina = "DELETE FROM menu where ID = '$id'";
                                            mysqli_query($conexion, $elimina);
                                            mysqli_close($conexion);
                                            ?>
 
 &nbsp;&nbsp;&nbsp;<label><h1>Eliminacion de platillo exitosa.</h1></label>
 <meta http-equiv="Refresh" content="3;../inicioempleado.php?usuario=<?php echo $usuario?>">
 <?php
require_once "../../pie.php";
?>