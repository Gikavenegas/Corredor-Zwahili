<?php

//Para conectarme a la base de datos:
require('conexion.php') ;

//Creo variables para asociar los datos ingresados en el formulario:

$newCategoria = array (
    $codCat = $_POST['CodigoCat_id'],
    $nomPro = $_POST['Nombre_Producto'],
    $preRollo = $_POST['Precio_kiloRollo'],
    $preFinal = $_POST['Precio_final']
);


//Variable para guardar los datos del formulario a la BD
$insBD_pro = "insert into productos(CodigoCat_id, Nombre_Producto, Precio_kiloRollo, Precio_final) values ('$codCat', '$nomPro', '$preRollo', '$preFinal')";

//Verificar datos existentes para que no se repitan las categorías

if(is_string($codCat)&&is_string($nomPro)&&is_numeric($preRollo)&&is_numeric($preFinal)){

    //Dos parámetros 1. variable que usé para conectarme y 2. la consulta
    //Enviar datos a la BD:
    $setDat_prod = mysqli_query($conexion,$insBD_pro);

    echo "Datos correctos y guardados en la base de datos";
    header('refresh: 1; url = productos.php');

} else{
    echo "Datos incorrectos, ingrese nuevamente los datos";
    header('refresh: 5; url = productos.php');
}



?>
