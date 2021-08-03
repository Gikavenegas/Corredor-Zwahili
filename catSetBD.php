<?php

//Para conectarme a la base de datos:
require('conexion.php') ;

//Creo variables para asociar los datos ingresados en el formulario:

$newCategoria = array (
    $codBD = $_POST['ID_BD'],
    $codCat = $_POST['idCodigo_Cat'],
    $nomCat = $_POST['Nombre_Categoría'],
    $anRollo = $_POST['AnchoRollo'],
    $rindRollo = $_POST['RindeRollo']
);



//Variable para guardar los datos del formulario a la BD
$insBD_cat = "insert into cat_productos(ID_BD, idCodigo_Cat, Nombre_Categoría, AnchoRollo, RindeRollo) values ('$codCat', '$nomCat', '$anRollo', '$rindRollo')";

//Verificar datos existentes para que no se repitan las categorías
if(Is_numeric($codBD)&&is_string($codCat)&&is_string($nomCat)&&is_numeric($anRollo)&&is_numeric($rindRollo)){


    //Dos parámetros 1. variable que usé para conectarme y 2. la consulta
    //Enviar datos a la BD:
    $setDat_cat = mysqli_query($conexion,$insBD_cat);

    echo "Datos correctos y guardados en la base de datos";
    header('refresh: 1; url = categorias.php');

} else{
    echo "Datos incorrectos, ingrese nuevamente los datos";
    header('refresh: 1; url = categorias.php');
}


?>
