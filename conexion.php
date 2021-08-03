<?php

//Para conectarme a la base de datos:
$conexion = mysqli_connect("localhost", "id17354350_administrador", "Q#--=f/cu]c5iony", "id17354350_corredor_zwahili");


//Corroborar que se conectó a la BD:
if(mysqli_connect_errno()){

    header("location: index.php");
}else{
    ;
}

?>