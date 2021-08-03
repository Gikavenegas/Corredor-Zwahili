<?php

session_start();

$usuarioMail = $_POST['email'];
$usuarioPass = $_POST['password'];

$__SESSION['emailUser']= $usuarioMail;
$__SESSION['passUser']= $usuarioPass;


$administrador = array(

    'adminEmail' => 'administrador@zwahili.com',
    'adminPassword' => 'ABC123',
);

if($_POST['email']==$administrador['adminEmail'] && $_POST['password']==$administrador['adminPassword']){
    header('refresh: 1; url = administrador.php');
}else{
    
    echo 'Datos incorrectos';
    header('refresh: 1; url = sesion.php');
};


?>