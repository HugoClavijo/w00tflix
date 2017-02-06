<?php
session_start();

$iddetalles=$_GET['idusuarios'];
$nombre =$_GET['nombre'];
$correo =$_GET['correo'];
$tipo =$_GET['tipo'];

include_once('../dataBase.php');
include_once("usuariosCollector.php");

$CollectorObj = new usuariosCollector();
$CollectorObj->updateUsuarios($idusuarios, $nombre, $correo, $tipo);

echo "Usuario: ";  
 echo " idusuario:".$idusuarios.", nombre:".$nombre, correo:".$correo, tipo:".$tipo;
     
echo "<br><a href='read_usuarios.php'>Regresar</a>";     
?>
