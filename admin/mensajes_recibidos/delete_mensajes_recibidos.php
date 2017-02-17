<?php
session_start();
$idmensajes_recibidos =$_GET['idmensajes_recibidos'];

include_once('../dataBase.php');

include_once("mensajes_recibidosCollector.php");
$menRecCollectorObj = new detalle_menRecCollector();
$menRecCollectorObj->deleteMensajeRecibidos($idmensajes_recibidos);

echo "Mensaje Recibido: ";  
 echo 'Id: '.$idmensajes_recibidos;
     
echo "<br><a href='read_mensajes_recibidos.php'>Regresar</a>";   

?>
