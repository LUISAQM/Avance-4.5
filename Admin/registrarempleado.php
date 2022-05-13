<?php 
    include("../db.php");
    include('../cabecera.php');
?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Registrarse</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <h1>Ingrese datos empleado</h1>
                                <form action="modDB/guardaregistroempleado.php" method="POST"  enctype= "multipart/form-data">

                                    <input type="text" class="form-control mb-3" name="txNombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="txApellido" placeholder="Apellido Paterno">
                                    <input type="text" class="form-control mb-3" name="txApellidoM" placeholder="Apellido Materno">
                                    <input type="text" class="form-control mb-3" name="txtDir" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="Tel" placeholder="Telefono">
                                    <input type="email" class="form-control mb-3" name="txtCorreo" placeholder="Correo">
                                    <input type="text" class="form-control mb-3" name="txtUsuario" placeholder="Usuario">
                                    <input type="text" class="form-control mb-3" name="txtContra4" placeholder="Contraseña"> 
                                    <input type="submit" class="btn btn-primary"> <a href="inicioadministrador.php"class="btn btn-info">Regresar</a><br>
     
    </form>
    </body>
    <?php
    include('../pie.php');
    ?>
</html>