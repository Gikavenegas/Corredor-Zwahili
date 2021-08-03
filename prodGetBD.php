<?php

//Para conectarme a la base de datos:
require('conexion.php') ;

//Variables para traer información
$tabBD_prod =  "select * from productos";

//Dos parámetros 1. variable que usé para conectarme y 2. la consulta
//Enviar datos a la BD:
$getDat_pro = mysqli_query($conexion,$tabBD_prod);


?>
