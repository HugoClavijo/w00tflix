<?php
session_start();
$iddetalles =$_GET['iddetalles'];


include_once('../dataBase.php');

include_once("detalle_videosCollector.php");
$detalleCollectorObj = new detalle_videosCollector();
$detalleCollectorObj->deleteDetalleVideos($iddetalles);

echo "Registro Borrado= ";  
 echo 'Id: '.$iddetalles;
     
echo "<br><a href='read_detalle_videos.php'>Regresar</a>";   
//header("Location: read_demo.php");
?>
