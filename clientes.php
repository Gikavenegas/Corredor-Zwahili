<?php

include 'conexion.php';

$consulta = "SELECT * FROM clientes";

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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


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
                <h1>Clientes</h1>
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

            <!--Formulario para ingresar un nuevo cliente -->
            <form action="sesCreate.php" method="POST">
                <div class="row">
                    <h4>Ingresar nuevo cliente</h4>
                    <div class="col">Nombre</div>
                    <div class="col">Apellidos</div>
                    <div class="col">Email</div>
                    <div class="col">Teléfono</div>
                    <div class="col">Contraseña</div>

                    <div class="col"></div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <input type="text" class="form-control" aria-label="First name" name="Nombre">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" aria-label="Last name" name="Apellidos">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" aria-label="First name" name="Email">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" aria-label="First name" name="Teléfono">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" aria-label="First name" name="Contraseña">
                    </div>

                    <div class="col d-grid gap-2 d-md-flex">
                        <button class="btn btn-success" type="submit">Guardar</button>
                    </div>
                </div>
            </form>


            <h4>Listado completo de clientes</h4>

            <!--Tabla para traer maquetado la información de la BD -->

            <div class="row table-responsive">
                <table class="table table-responsive">  
                    <tr>
                        <th>Nombre</th> 
                        <th>Apellidos</th> 
                        <th>Email</th> 
                        <th>Teléfono</th>
                        <th>Contraseña</th> 
                        <th>eliminar</th> 
                    </tr>

                    <?php
                    while($tabla = mysqli_fetch_array($listado)){
                    ?>
                        <tr>
                            <td><?php echo $tabla['Nombre'];?></td>
                            <td><?php echo $tabla['Apellidos'];?></td>
                            <td><?php echo $tabla['Email'];?></td>
                            <td><?php echo $tabla['Teléfono'];?></td>
                            <td><?php echo $tabla['Contraseña'];?></td>
                            <td><a href="clieDeleBD.php?id=<?php echo $tabla['Teléfono'];?>"><i class="fas fa-trash-alt"></i></a></td>   
                        </tr>
                    <?php } 
                    ?>
                </table>        
            </div>

            <?php
            include_once 'clieGetBD.php';
            ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>