<?php

include 'conexion.php';

//Traer todo el listado de datos que tienen en común
$consulta = "SELECT * FROM cat_productos INNER JOIN productos ON cat_productos.idCodigo_Cat = productos.CodigoCat_id";

$listado=mysqli_query($conexion, $consulta);


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/BD.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>BD - Corredor Zwahili</title>
</head>
<body>
    <header>
        <div class="container-iconos_header">
            <!-- <div class="cerrarSesion_header">
                <li><i class="far fa-user"></i><a href="sesion.php">Cerrar sesión</a></li>
            </div>     -->
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <h1>Categoría y productos</h1>
                <ul class="nav nav-tabs">
                <li class="nav-item">
                        <a class="nav-link" href="index.php">Index</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categorias.php">Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listado_productos.php">Productos completos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clientes.php">Clientes</a>
                    </li>
                </ul>
            </div>

            <!--Tabla para traer maquetado la información de la BD -->

            <div class="row table-responsive">
                <table class="table table-responsive">  
                    <tr>
                        <th>ID</th> 
                        <th>Código categoría</th> 
                        <th>Nombre categoría</th>
                        <th>Ancho - rollo</th> 
                        <th>Rinde - rollo</th> 
                        <th>Nombre producto</th> 
                        <th>Precio por kilo</th> 
                        <th>Precio final</th> 
                    </tr>

                    <?php
                    while($tabla = mysqli_fetch_array($listado)){
                    ?>
                        <tr>
                            <td><?php echo $tabla['ID_BD'];?></td>
                            <td><?php echo $tabla['idCodigo_Cat'];?></td>
                            <td><?php echo $tabla['Nombre_Categoría'];?></td>
                            <td><?php echo $tabla['AnchoRollo'];?></td>
                            <td><?php echo $tabla['RindeRollo'];?></td>

                            <td><?php echo $tabla['Nombre_Producto'];?></td>
                            <td><?php echo $tabla['Precio_kiloRollo'];?></td>
                            <td><?php echo $tabla['Precio_final'];?></td>
                        </tr>
                    <?php } 
                    ?>
                </table>        
            </div>

        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>