<?php
session_start();


$idUsuario=$_GET['idusuario'];
$mensaje=$_GET['mensaje'];



include_once('../dataBase.php');

include_once("mensajes_enviadosCollector.php");
$mensajes_enviadosCollectorObj = new mensajes_enviadosCollector();
$mensajes_enviadosCollectorObj->createMensajes_enviados($idUsuario,$mensaje);
echo "idMensaje enviado<br><br>";  

echo 'Usuario#: '.$idUsuario,"<br>";
echo 'Mensaje: '.$mensaje,"<br>";
?>
<br><br><br>
<a href="read_mensajes_enviados.php"> Regresar </a>
