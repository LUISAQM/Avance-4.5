<?php 
 require_once "../../cabecera.php";
include '../../db.php';

                                            $nombre = $_POST["txNombre"];
                                            $apellido=$_POST["txApellido"];
                                            $apellidom=$_POST["txApellidoM"];
                                            $tel=$_POST["Tel"];
                                            $dir=$_POST["txtDir"];
                                            $usuario=$_POST["txtUsuario"];
                                            $correo=$_POST["txtCorreo"];
                                            $contra=$_POST["txtContra4"];
                                            
                                            $ingreso= "INSERT INTO usuarios VALUES ('0','$nombre','$apellido','$apellidom','$tel','$dir','$correo','$usuario','$contra')";
                                            mysqli_query($conexion, $ingreso);
                                            mysqli_close($conexion);
                                            ?>
                                            &nbsp;&nbsp;&nbsp;<label><h1>Registro exitoso.</h1></label>
                                            <meta http-equiv="Refresh" content="1;../iniciousuariocuenta.php?nombre=<?php echo $usuario?>">
                                            <?php 
require_once "../../pie.php";
?>
