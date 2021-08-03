<?php

//Para conectarme a la base de datos:
require('conexion.php') ;

//Creo variables para asociar los datos ingresados en el formulario:

$newSesion = array (
    $nombreCL = $_POST['Nombre'],
    $apellidoCL = $_POST['Apellidos'],
    $correoCL = $_POST['Email'],
    $celularCL = $_POST['Teléfono'],
    $contraseñaCL = $_POST['Contraseña']
);

//Variable para guardar los datos del formulario a la BD
$insBD_cli = "insert into clientes(Nombre, Apellidos, Email, Teléfono, Contraseña) values ('$nombreCL', '$apellidoCL', '$correoCL', '$celularCL', '$contraseñaCL')";

$setDat_cli = mysqli_query($conexion,$insBD_cli);

echo "Datos correctos y guardados en la base de datos";
header('refresh: 1; url = clientes.php');


?>
