<?php

//Para conectarme a la base de datos:
require('conexion.php') ;

//Creo variables para asociar los datos ingresados en el formulario:

$newProveedores = array (
    $dniProv = $_POST['DNI'],
    $nomProv = $_POST['Nombre'],
    $apellProv = $_POST['Apellido'],
    $telProv = $_POST['Teléfono'],
    $direProv = $_POST['Dirección']
);


//Variable para guardar los datos del formulario a la BD
$insBD_prov = "insert into proveedores(DNI, Nombre, Apellido, Teléfono, Dirección) values ('$dniProv', '$nomProv', '$apellProv', '$telProv', $direProv)";

//Verificar datos existentes para que no se repitan las categorías
if(is_numeric($dniProv)&&is_string($nomProv)&&is_string($apellProv)&&is_numeric($telProv)&&is_string($direProv)){

    //Dos parámetros 1. variable que usé para conectarme y 2. la consulta
    //Enviar datos a la BD:
    $setDat_prov = mysqli_query($conexion,$insBD_prov);

    echo "Datos correctos y guardados en la base de datos";
    header('refresh: 1; url = proveedores.php');

} else{
    echo "Datos incorrectos, ingrese nuevamente los datos";
    header('refresh: 1; url = proveedores.php');
}


?>
