<?php

require 'conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE ID_Prod= '$id'";

$resultado = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($resultado);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <title>Modificar</title>
</head>
<body>
    <header>
        <div class="container-iconos_header">
            <div class="cerrarSesion_header">
                <li><i class="far fa-user"></i><a href="sesion.php">Cerrar sesión</a></li>
            </div>    
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <h1>Modificar productos</h1>
            </div>
            <form action="prodUpdaBD.php" method="POST">
                <div class="row g-3">
                    <div class="col">
                        <label for="inputCodPro">Código categoría</label>
                        <input type="text" class="form-control" name="CodigoCat_id" value="<?php echo $row['CodigoCat_id'];?>" id="inputCodCat" placeholder="Código categoría">
                    </div>
                    <div class="col">
                        <label for="inputNomPro">Nombre producto</label>
                        <input type="text" class="form-control" aria-label="Last name" name="Nombre_Producto" value="<?php echo $row['Nombre_Producto'];?>" id="inputNomCat" placeholder="Nombre producto">
                    </div>
                    <div class="col">
                        <label for="inputAncRollo">Precio x kilo</label>
                        <input type="text" class="form-control" aria-label="First name" name="Precio_kiloRollo" value="<?php echo $row['Precio_kiloRollo'];?>" id="inputAncRollo" placeholder="Precio kilo">
                    </div>
                    <div class="col">
                        <label for="inputRinRollo">Precio final</label>
                        <input type="text" class="form-control" aria-label="First name" name="Precio_final" value="<?php echo $row['Precio_final'];?>" id="inputRinRollo" placeholder="Precio final">
                    </div>

                    <input type="hidden" id="id" name="id" value="<?php echo $row['ID_Prod'];?>" >       

                    <div class="col d-grid gap-2 d-md-flex">
                        <button class="btn btn-success" type="submit">Actualizar</button>
                        <a href="productos.php" class="btn btn-secondary">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>