<?php

//Para conectarme a la base de datos:
include 'conexion.php';

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


    <title>Sistema corredor Zwahili</title>
</head>
<body>

    <header>
        <div class="container-iconos_header">
            <!-- <div class="cerrarSesion_header">
                <li><i class="far fa-user"></i><a href="sesClose.php">Cerrar sesión</a></li>
            </div>     -->
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <h1>Corredor Zwahili</h1>
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

            <div class="row">
                <h3>Bienvenid@ a la base de datos de Corredor Zwahili</h3>
                <h5>¿Qué puedo encontrar y qué puedo hacer?</h5>
                <h6>Crear categorías</h6>
                <p>Dentro del sistema de Zwahili los productos se guardan dentro de categorías según su codificación y sus especificaciones.</p>
                <p>Primero se debe crear una categoría y luego sus productos.</p>
                <p>El ID lo puedes asignar para darle un orden a las categorías.</p>
                <p>¡Precaución! No deben existir dos categorías con las mismas especificaciones, ya que no es necesario su duplicación.</p>
                <h6>Editar y eliminar categorías</h6>
                <p>En la sección de categorías se puede encontrar el listado completo de las categorías y en cada una hay una opción para editar su información o eliminarla completamente de la base de datos.</p>
                <h6>Crear productos</h6>
                <p>Dentro del sistema de Zwahili las categorías guardan diferentes productos según sus especificaciones.</p>
                <p>Se puede asignar el nuevo producto a una categoría existente, si no existe, se debe crear primero su categoría y posteriormente sí crear el/los producto/s.</p>
                <p>El ID lo otorga automáticamente el sistema para darle un número interno en la base de datos.</p>
                <h6>Editar y eliminar productos</h6>
                <p>En la sección "Productos"" se puede encontrar el listado completo y en cada opción se podrá editar o eliminar completamente el producto de la base de datos.</p>
                <h6>Añadir y/o eliminar clientes</h6>
                <p>En la sección "Clientes"" los clientes al darse de alta en la página web serán agregados en esta sección, en donde el administrador podrá dar de alta mientras se habillita en la página principal o los podrá eliminar/dar de baja. No podrá editar porque es información personal de los clientes.</p>


            </div>
        </div>
    </main>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>