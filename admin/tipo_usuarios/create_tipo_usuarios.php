<?php
session_start();

$detalle =$_GET['detalle'];

include_once('../dataBase.php');

include_once("tipo_usuariosCollector.php");
$tipouserCollectorObj = new tipo_usuariosCollector();
$tipouserCollectorObj->createTipoUsuarios($detalle);
echo "Registro Creado<br><br>";  
echo 'Tipo: '.$detalle;
?>
<br><br><br>
<a href="read_tipo_usuarios.php">Regresar</a>
