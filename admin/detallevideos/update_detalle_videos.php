<?php
session_start();

$iddetalles=$_GET['iddetalles'];
$descripcion =$_GET['descripcion'];

include_once('../dataBase.php');
include_once("detalle_videosCollector.php");

$CollectorObj = new detalle_videosCollector();
$CollectorObj->updateDetalleVideos($iddetalles,$descripcion);

echo "Detalle de video Editado= ";  
 echo " iddetalles:".$iddetalles.", descripcion:".$descripcion;
     
echo "<br><a href='read_detalle_videos.php'>Regresar</a>";     
?>
