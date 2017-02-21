<?php
session_start();


$fecha_bloqueo=$_GET['fecha_bloqueo'];
$idusuario=$_GET['idusuario'];



include_once('../dataBase.php');

include_once("usuarios_bloqueadosCollector.php");
$usuarios_bloqueadosCollectorObj = new usuarios_bloqueadosCollector();
$usuarios_bloqueadosCollectorObj->createUsuarios_bloqueados($fecha_bloqueo,$idusuario);
echo "Usuario bloqueado: <br><br>";  

echo 'Fecha#  : '.$fecha_bloqueo,"<br>";
echo 'Usuario#: '.$idusuario,"<br>";
?>
<br><br><br>



<a href="read_usuarios_bloqueados.php"> Regresar </a>
