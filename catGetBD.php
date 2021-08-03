<?php

//Para conectarme a la base de datos:
require('conexion.php') ;

//Variables para traer información
$tabBD_cat =  "select * from cat_productos";

//Dos parámetros 1. variable que usé para conectarme y 2. la consulta
//Enviar datos a la BD:
$getDat_cat = mysqli_query($conexion,$tabBD_cat);


?>
