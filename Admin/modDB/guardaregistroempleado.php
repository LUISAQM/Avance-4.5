<?php 
 require_once "../../cabecera.php";
include '../../db.php';
                                            $nombre = $_POST["txNombre"];
                                            $apellido=$_POST["txApellido"];
                                            $apellidom=$_POST["txApellidoM"];
                                            $dir=$_POST["txtDir"];
                                            $tel=$_POST["Tel"];
                                            $correo=$_POST["txtCorreo"];
                                            $usuario=$_POST["txtUsuario"];
                                            $contra=$_POST["txtContra4"];
                                            
                                            $ingreso= "INSERT INTO empleados VALUES ('0','$nombre','$apellido','$apellidom','$dir','$tel','$correo','$usuario','$contra')";
                                            mysqli_query($conexion, $ingreso);
                                            mysqli_close($conexion);
                                            ?>
                                            &nbsp;&nbsp;&nbsp;<label><h1>Registro de empleado exitoso.</h1></label>
                                            <meta http-equiv="Refresh" content="3;../inicioadministrador.php">
                                            <?php 
require_once "../../pie.php";
?>
