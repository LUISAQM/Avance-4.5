<?php 
 require_once "../../cabecera.php";
include '../../db.php';
                                            $imagen = addslashes(file_get_contents($_FILES['IMG']['tmp_name']));
                                            $nombre = $_POST["txtNombre"];
                                            $tipo=$_POST["tipo"];
                                            $porcion=$_POST["porcion"];
                                            $precio=$_POST["precio"];
                                            $descripcion=$_POST["descripcion"];

                                            $ingreso= "INSERT INTO menu VALUES ('0','$imagen','$nombre','$tipo','$porcion','$precio','$descripcion')";
                                            mysqli_query($conexion, $ingreso);
                                            mysqli_close($conexion);
                                            ?>
                                            &nbsp;&nbsp;&nbsp;<label><h1>Registro exitoso.</h1></label>
                                            <meta http-equiv="Refresh" content="3;../inicioadministrador.php">
                                            <?php 
require_once "../../pie.php";