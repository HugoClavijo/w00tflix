<?php
session_start();

$nombre =$_GET['nombre'];
$correo =$_GET['correo'];
$tipo =$_GET['tipo'];


include_once('../dataBase.php');

include_once("usuariosCollector.php");
$userCollectorObj = new usuariosCollector();
$userCollectorObj->createUsuarios($nombre, $correo, $tipo);
echo "Usuario Creado<br><br>";  
echo 'Nombre: '.$nombre;
echo 'Correo: '.$correo;
echo 'Tipo: '.$tipo;
?>

<br><br><br>
<a href="read_usuarios.php">Regresar</a>
