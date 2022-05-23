<?php 
 require_once "../../cabecera.php";
include '../../db.php';
                                            $id= $_GET['id'];
                                            $nombre = $_POST["txtNombre"];
                                            $apellido=$_POST["txApellido"];
                                            $apellidom=$_POST["txApellidoM"];
                                            $tel=$_POST["Tel"];
                                            $dir=$_POST["txtDir"];
                                            $correo=$_POST["txtCorreo"];
                                            
                                            $update= "UPDATE empleados set nombre='$nombre',apellido_paterno='$apellido',apellido_materno='$apellidom',telefono='$tel',direccion='$dir',correo='$correo' where '$id' like ID";
                                            mysqli_query($conexion, $update);
                                            mysqli_close($conexion);
                                            ?>
 
 &nbsp;&nbsp;&nbsp;<label><h1>Actualizacion de datos exitosa.</h1></label>
 <meta http-equiv="Refresh" content="1;../inicioadministrador.php">
 <?php
require_once "../../pie.php";

?>
