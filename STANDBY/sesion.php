<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/sesion.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/eb3ade45b8.js" crossorigin="anonymous"></script>

    <title>Inicio sesion</title>
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
                <li><i class="far fa-user"></i><a href="sesion.php">Iniciar sesión / Crear usuario</a></li>
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

    <main>
        <section>
            <div class="contenedor-formularios">
                <div class="Cont-form-crear-usu">
                    <div class="inicioSesion-titulo">
                        <i class="far fa-user"></i>
                        <h2>Crear usuario</h2>
                    </div>    

                    <div class="new-usuario">
                        <form method="POST" action="clientes.php" class="formulario">
                            <!-- Grupo nombre -->
                            <div class="formulario_grupo" id="grupo_nombre">
                                <label for="nombre" class="formulario_label"> <b>Nombre(s)</b></label>
                                <div class="formulario_grupo-input">
                                    <input type="text" class="formulario_input" name="Nombre" placeholder="Escriba su nombre"></label>
                                <i class="formulario_validacion-estado far fa-times-circle"></i>
                                </div>		
                                <p class="formulario_input-error">Escriba su nombre</p>
                            </div>
        
                            <!-- Grupo apellido -->
                            <div class="formulario_grupo" id="grupo_apellido">
                                <label for="apellido" class="formulario_label"> <b>Apellido(s)</b></label>
                                <div class="formulario_grupo-input">
                                    <input type="text" class="formulario_input" name="Apellidos" placeholder="Escriba su apellido"></label>
                                    <i class="formulario_validacion-estado far fa-times-circle"></i>
                                </div>		
                                <p class="formulario_input-error">Escriba su apellido</p>
                            </div>
            
                            <!-- Grupo email -->
                            <div class="formulario_grupo" id="grupo_correo">
                                <label for="correo" class="formulario_label"> <b>Correo electrónico</b></label>
                                <div class="formulario_grupo-input">
                                    <input type="email" class="formulario_input" name="E-mail" placeholder="Escriba su correo electrónico"></label>
                                    <i class="formulario_validacion-estado far fa-times-circle"></i>
                                </div>		
                                <p class="formulario_input-error">Escriba su correo electrónico</p>
                            </div>
            
                            <!-- Grupo celular -->
                            <div class="formulario_grupo" id="grupo_celular">
                                <label for="celular" class="formulario_label"><b>Celular</b></label>
                                <div class="formulario_grupo-input">
                                    <input type="text" class="formulario_input" name="Teléfono" placeholder="Escriba su número telefónico"></label>
                                    <i class="formulario_validacion-estado far fa-times-circle"></i>
                                </div>		
                                <p class="formulario_input-error">Escriba su número de celular</p>
                            </div>

                            <!-- Grupo contraseña -->
                            <div class="formulario_grupo" id="grupo_contraseña">
                                <label for="contraseña" class="formulario_label"><b>Contraseña</b></label>
                                <div class="formulario_grupo-input">
                                    <input type="password" class="formulario_input" name="Contraseña" placeholder="Escriba su contraseña"></label>
                                    <i class="formulario_validacion-estado far fa-times-circle"></i>
                                </div>		
                                <p class="formulario_input-error">Escriba una contraseña mín. 7 caracteres entre letras y números, sin caracteres especiales</p>
                            </div>


                            <!-- Grupo validación -->        
                            <div class="formulario_mensaje" id="formulario_mensaje">
                                <p><i class="fas fa-exclamation-triangle"></i> Error: debe completar todos los datos para crear un usuario.</p>
                            </div>
            
                            <div class="formulario_grupo formulario_grupo-btn-enviar">
                                <button type="submit" class="formulario_btn">Enviar</button>
                                <p class="formulario_mensaje-exito" id="formulario_mensaje-exito">!Bienvenid@¡ Se ha creado el usuario.</p>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- formulario inicio de sesion -->

                <div class="Cont-form-inicio-ses">
                    <div class="inicioSesion-titulo">
                        <i class="far fa-user"></i>
                        <h2>Iniciar sesión</h2>
                    </div>    

                    <div class="start-sesion">
                        <form method="POST" action="sesiones.php" class="formulario">        
                            <!-- Grupo email -->
                            <div class="formulario_grupo">
                                <label for="correo" class="formulario_label"> <b>Correo electrónico</b></label>
                                <div class="formulario_grupo-input">
                                    <input type="email" class="formulario_input" name="email"></label>
                                    <i class="formulario_validacion-estado far fa-times-circle"></i>
                                </div>		
                                <p class="formulario_input-error">Escriba el correo electrónico con el que se registró</p>
                            </div>

                            <!-- Grupo password -->
                            <div class="formulario_grupo">
                                <label for="correo" class="formulario_label"> <b>Contraseña</b></label>
                                <div class="formulario_grupo-input">
                                    <input type="password" class="formulario_input" name="password"></label>
                                    <i class="formulario_validacion-estado far fa-times-circle"></i>
                                </div>		
                                <p class="formulario_input-error">Escriba su contraseña</p>
                            </div>

                            <!-- Grupo Errores/habilitado -->
            
                            <div class="formulario_mensaje">
                                <p><i class="fas fa-exclamation-triangle"></i> Error: debe completar todos los datos para iniciar sesion.</p>
                            </div>
            
                            <div class="formulario_grupo formulario_grupo-btn-enviar">
                                <button type="submit" class="formulario_btn">Ingresar</button>
                                <p class="formulario_mensaje-exito">¡Bienvenid@!</p>
                            </div>

                            <!--Grupo sesion con redes sociales -->

                            <div class="formulario_grupo-redes">
                                <div class="grupo_sesionRedes">
                                    <button type="submit" class="formulario_btn-redes"><i class="fab fa-facebook-square"></i>Iniciar con Facebook</button>
                                </div>
                                <div class="grupo_sesionRedes">
                                    <button type="submit" class="formulario_btn-redes"><i class="far fa-envelope"></i>Iniciar con Gmail</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
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
    <!-- <script src="js/sesion.js"></script> -->
	<script src="https://kit.fontawesome.com/eb3ade45b8.js" crossorigin="anonymous"></script>
</body>
</html>