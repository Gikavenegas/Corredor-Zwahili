<?php

//Para conectarme a la base de datos:
require('conexion.php') ;

//Variables para traer información
$tabBD_cli =  "select * from clientes";

//Dos parámetros 1. variable que usé para conectarme y 2. la consulta
//Enviar datos a la BD:
$getDat_cli = mysqli_query($conexion,$tabBD_cli);


?>
