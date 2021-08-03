<?php

require 'conexion.php';

$id= $_POST['id'];
$codCat = $_POST['CodigoCat_id'];
$nomPro = $_POST['Nombre_Producto'];
$preRollo = $_POST['Precio_kiloRollo'];
$preFinal = $_POST['Precio_final'];


$updateProd = "UPDATE productos SET CodigoCat_id='$codCat', Nombre_Producto='$nomPro', Precio_kiloRollo='$preRollo', Precio_final='$preFinal' WHERE ID_Prod ='$id'";

$insert=mysqli_query($conexion, $updateProd);

if($insert){
    echo '<h3>Registro actualizado</h3>';
    header('refresh: 1; url = productos.php');
}else{
    echo 'Error: '. mysqli_errno($conexion);
}

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

    <title>BD - Corredor Zwahili</title>
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
