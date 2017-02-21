<?php
session_start();

$descripcion =$_GET['descripcion'];

include_once('../dataBase.php');

include_once("detalle_videosCollector.php");
$detalleVideosCollectorObj = new detalle_videosCollector();
$detalleVideosCollectorObj->createDetalleVideos($descripcion);
echo "Registro Creado<br><br>";  
echo 'Mensaje: '.$descripcion;
?>
<br><br><br>
<a href="read_detalle_videos.php"> Regresar </a>
