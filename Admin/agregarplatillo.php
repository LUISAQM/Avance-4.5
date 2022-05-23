<?php 
    include("../db.php");
    include('../cabecera.php');


?>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar pasteles</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <h1>Ingrese los datos</h1>
                                <form action="modDB/agregaplatillo.php" method="POST"  enctype= "multipart/form-data">

                                    <input type="file" class="form-control mb-3" name="IMG" placeholder="Sube la imagen del platillo">
                                    <input type="text" class="form-control mb-3" name="txtNombre" placeholder="Nombre del platillo">
                                    <input type="text" class="form-control mb-3" name="tipo" placeholder="Tipo de platillo">
                                    <input type="text" class="form-control mb-3" name="porcion" placeholder="Porcion del platillo">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio del platillo"> 
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion"> 
                                    <input type="submit" class="btn btn-primary"> <a href="inicioempleado.php"class="btn btn-info">Regresar</a><br>
     
    </form>
    </body>
    <?php
    include('../pie.php');
    ?>
</html>