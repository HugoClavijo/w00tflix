<?php
session_start();

$idmensajes_recibidos=$_GET['idmensajes_recibidos'];
$idusuario =$_GET['idusuario'];
$mensaje =$_GET['mensaje'];

include_once('../dataBase.php');
include_once("mensajes_recibidosCollector.php");

$menRecCollectorObj = new detalle_menRecCollector();
$menRecCollectorObj->createMensajeRecibidos($idmensajes_recibidos, $idusuario, $mensaje);

echo "Mensaje Recibido: ";  
 echo " idmensajes_recibidos:".$idmensajes_recibidos. ", idusuario:".$idusuario. ", mensaje:".$mensaje;
     
echo "<br><a href='read_mensajes_recibidos.php'>Regresar</a>";    

?>
