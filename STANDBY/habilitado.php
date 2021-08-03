<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/shop.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/eb3ade45b8.js" crossorigin="anonymous"></script>
    
    
        <title>Shop</title>
    </head>
    <body>
        <header>
            <div class="container-iconos_header">
                <div class="Redes_header">
                    <li><i class="fab fa-facebook-square"></i><a href="https://www.facebook.com/corredor_zwahili-102185001140136/" target="_blank">Facebook</a></li>
                    <li><i class="fab fa-instagram"></i><a href="https://www.instagram.com/corredor_zwahili/?hl=es-la" target="_blank">Instagram</a></li>
                    <li><i class="fab fa-whatsapp"></i><a href="https://wa.me/message/3SPCV7HWP227H1" target="_blank">WhatsApp</a></li>
                </div>
                <div class="inicioSesion_header">
                    <li><i class="far fa-user"></i><a href="sesion.php">Iniciar sesión</a></li>
                </div>    
            </div>
    
            <div class="Contenedor_menu-principal">
                <nav class="Contenedor_menu-principal">
                    <div class="Boton-principal"><a href="index.html">Inicio</a></div>
                    <div class="Boton-principal"><a href="promociones.html">Promociones</a></div>
                    <div class="Boton-principal"><a href="productos.html">Productos</a></div>
                    <div class="Boton-principal"><a href="contacto.html">Contacto</a></div>
                    <div class="Boton-principal"><a href="shop.html"><i class="fas fa-shopping-cart"></i></a></div>
                </nav>    
            </div>
        </header>
    
        <!--Contenido-->
        <main>
            
            <section>
                <?php

                    // if(isset($_GET['email']) && empty($_GET['email'])){

                    // }
                    
                    $usuario = array(
                        'email' =>'gika',
                        'apellido' =>'venegas'

                    );

                    var_dump($_GET);

                    echo "<hr>";
                    
                    echo $_GET['nombre'];
                    echo $_GET['apellido'];
                    echo $_GET['correo'];
                    echo $_GET['celular'];
                    echo $_GET['password'];


                    echo $usuario ['apellido'];

                ?>
            </section>
  
        </main>

        <!--Footer-->
        <footer>
            <div id="Footer-Redes">
                <li><i class="fab fa-facebook-square"></i><a href="https://www.facebook.com/corredor_zwahili-102185001140136/" target="_blank">Facebook</a>
                </li>
                <li><i class="fab fa-instagram"></i><a href="https://www.instagram.com/corredor_zwahili/?hl=es-la" target="_blank">Instagram</a>
                </li>
                <li><i class="fab fa-whatsapp"></i><a href="https://wa.me/message/3SPCV7HWP227H1" target="_blank">WhatsApp</a>
                </li>   
            </div>
            <div id="Footer-copy">
                <p>Copyright - Todos los derechos reservados</p>
            </div>
        </footer> 
    <script src="js/sesion.js"></script> 
</body>
</html>