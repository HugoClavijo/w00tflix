<?php
session_start();


$idusuario_bloqueado =$_GET['idusuario_bloqueado'];
$fecha_bloqueo =$_GET['fecha_bloqueo'];
$idusuario =$_GET['idusuario'];

include_once('../dataBase.php');
include_once("usuarios_bloqueadosCollector.php");

$CollectorObj = new usuarios_bloqueadosCollector();
$CollectorObj->updateUsuarios_bloqueados($idusuario_bloqueado,$fecha_bloqueo,$idusuario);

echo "Detalle de Usuarios Bloqueados: <br>";  
 echo " idusuario_bloqueado:".$idusuario_bloqueado.", fecha_bloqueo:".$fecha_bloqueo. ", idusuario".$idusuario;
     
echo "<br><a href='read_usuarios_bloqueados.php'>Regresar</a>";     
?>
