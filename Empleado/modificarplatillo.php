<?php 
    include("../db.php");
    include('../cabecera.php');

$id=$_GET['id'];
$usuario=$_GET['usuario'];
$sql="SELECT * from menu where ID='$id'";
$result=mysqli_query($conexion,$sql);
$mostrar=mysqli_fetch_array($result);
?>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar menu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <h1>Ingrese los datos</h1>
                                <form action="modDB/cambiaplatillo.php?id=<?php echo $id?>&&usuario=<?php echo $usuario?>" method="POST"  enctype= "multipart/form-data">

                                    <input type="file" class="form-control mb-3" name="IMG" placeholder="Sube la imagen del platillo">
                                    <input type="text" class="form-control mb-3" name="txtNombre" value="<?php echo $mostrar['nombre']?>">
                                    <input type="text" class="form-control mb-3" name="tipo" value="<?php echo $mostrar['tipo']?>">
                                    <input type="text" class="form-control mb-3" name="porcion" value="<?php echo $mostrar['porcion']?>">
                                    <input type="text" class="form-control mb-3" name="precio" value="<?php echo $mostrar['precio']?>"> 
                                    <input type="text" class="form-control mb-3" name="descripcion" value="<?php echo $mostrar['descripcion']?>"> 
                                    <input type="submit" class="btn btn-primary"> <a href="inicioempleado.php?usuario=<?php echo $usuario?>"class="btn btn-info">Regresar</a><br>
     
    </form>
    </body>
    <?php
    include('../pie.php');
    ?>
</html>