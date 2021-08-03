<?php

require('conexion.php') ;

$consultas = mysqli_query($conexion,"select idCodigo_Cat from cat_productos");

echo "<pre>";
var_dump($consultas);
echo "</pre>";

echo"<br>";
while($fila = mysqli_fetch_array($consultas, MYSQLI_ASSOC)){
    printf("");
}

echo"<br>";
$row = $consultas -> fetch_array(MYSQLI_BOTH);
print_r($row);

echo"<br>";
print_r($consultas);

echo"<br>";
printf($consultas);



//Enviar datos a la BD:
// $setDat_cat = mysqli_query($conexion,"insert into productos(Nom-Producto, Precio_kiloRollo, Precio_final, Código-cat_id) values ('Prueba producto', '12000', '12500', 'ARG2')");


//Enviar datos a la BD: FUNCIONA
// $setDat_cat = mysqli_query($conexion,"insert into prueba_cat(idCategoria, Nombre_Categoría) values ('123', 'Prueba')");


//Enviar datos a la BD: FUNCIONA
// $setDat_cat = mysqli_query($conexion,"insert into cat_productos(idCodigo_Cat, Nombre_Categoría, AnchoRollo, RindeRollo) values ('123', 'Prueba', '1.60', '5')");


//Enviar datos a la BD: PRIMERO SE DEBE CREAR LA INFORMACIÓN DE LA CATEGORÍA PARA QUE AQUÍ PUEDA INGRESAR EL ÚLTIMO DATO DEL CÓDIGO DE CATEGORÍA
// $setDat_cat = mysqli_query($conexion,"insert into productos(Nombre_Producto, Precio_kiloRollo, Precio_final, CodigoCat_id) values ('Prueba50', '12000', '12500', '123')");


?>
