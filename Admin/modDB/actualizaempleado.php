<?php 
 require_once "../../cabecera.php";
include '../../db.php';
                                            $nombre = $_POST["txtNombre"];
                                            $apellido=$_POST["txApellido"];
                                            $apellidom=$_POST["txApellidoM"];
                                            $tel=$_POST["Tel"];
                                            $dir=$_POST["txtDir"];
                                            $usuario=$_POST["txtUsuario"];
                                            $correo=$_POST["txtCorreo"];
                                            $contra=$_POST["txtContra4"];
                                            $id=$_POST["id"];
                                            
                                            $update= "UPDATE empleados set nombre='$nombre',apellido_paterno='$apellido',apellido_materno='$apellidom',telefono='$tel',direccion='$dir',correo='$correo',usuario='$usuario',password='$contra' where ID like $id";
                                            mysqli_query($conexion, $update);
                                            mysqli_close($conexion);
                                            ?>
 
 &nbsp;&nbsp;&nbsp;<label><h1>Actualizacion de datos exitosa.</h1></label>
 <meta http-equiv="Refresh" content="3;../inicioadministrador.php">
 <?php
require_once "../../pie.php";
?>