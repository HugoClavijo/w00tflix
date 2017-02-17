<?php
session_start();

$isusuario =$_GET['idusuario'];
$mensaje =$_GET['mensaje'];

include_once('../dataBase.php');

include_once("mensajes_recibidosCollector.php");
$menRecCollectorObj = new detalle_menRecCollector();
$menRecCollectorObj->createMensajeRecibidos($idusuario, $mensaje);

?>

<br><br><br>
<a href="read_mensajes_recibidos.php">Regresar</a>
