<?php

session_start();

echo "Sesión finalizada";

session_destroy();

header('refresh: 0.5; url = sesion.php');


?>