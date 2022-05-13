<?php 
 require_once "../../cabecera.php";
include '../../db.php';
                                            $id=$_GET["id"];
                                            $imagen = addslashes(file_get_contents($_FILES['IMG']['tmp_name']));
                                            $nombre = $_POST["txtNombre"];
                                            $tipo=$_POST["tipo"];
                                            $porcion=$_POST["porcion"];
                                            $precio=$_POST["precio"];
                                            $descripcion=$_POST["descripcion"];
                                            
                                            $update= "UPDATE menu set imagen='$imagen',nombre='$nombre',tipo='$tipo',porcion='$porcion',precio='$precio',descripcion='$descripcion' where ID like '$id'";
                                            mysqli_query($conexion, $update);
                                            mysqli_close($conexion);
                                            ?>
 
 &nbsp;&nbsp;&nbsp;<label><h1>Actualizacion de datos exitosa.</h1></label>
 <meta http-equiv="Refresh" content="3;../inicioadministrador.php">
 <?php
require_once "../../pie.php";
?>