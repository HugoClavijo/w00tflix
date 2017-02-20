<?php
session_start();

$idusuarios=$_GET['idusuarios'];
$nombre =$_GET['nombre'];
$correo =$_GET['correo'];
$tipo =$_GET['tipo'];
$usuario =$_GET['usuario'];
$pass =$_GET['pass'];

include_once('../dataBase.php');
include_once("usuariosCollector.php");

$CollectorObj = new usuariosCollector();
$CollectorObj->updateUsuarios($idusuarios, $nombre, $correo, $tipo, $usuario, $pass);

echo "Usuario: ";  
 echo " idusuario:".$idusuarios.", nombre: ".$nombre.", correo: ".$correo.", tipo: ".$tipo.", usuario: ".$usuario.", password: ".$pass;
     
echo "<br><a href='read_usuarios.php'>Regresar</a>";     
?>
