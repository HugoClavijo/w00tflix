<?php
session_start();

$idmensaje_enviado =$_GET['idmensaje_enviado'];
$idusuario =$_GET['idusuario'];
$mensaje =$_GET['mensaje'];

include_once('../dataBase.php');
include_once("mensajes_enviadosCollector.php");

$CollectorObj = new mensajes_enviadosCollector();
$CollectorObj->updateMensajes_enviados($idmensaje_enviado,$idusuario,$mensaje);

echo "Detalle de Mensaje enviado= ";  
 echo " idmensaje_enviado:".$idmensaje_enviado.", idusuario:".$idusuario. " mensaje".$mensaje;
     
echo "<br><a href='read_mensajes_enviados.php'>Regresar</a>";     
?>
