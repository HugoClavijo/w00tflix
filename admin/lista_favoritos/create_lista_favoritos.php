<?php
session_start();

$idusuario =$_GET['idusuario'];
$idvideo =$_GET['idvideo'];

include_once('../dataBase.php');

include_once("categorias_videosCollector.php");
$lisFavCollectorObj = new detalle_lisFaVCollector();
$lisFavCollectorObj->createListaFavoritos($idusuario, $idvideo);
echo "Video agregado a lista<br><br>";
echo 'idusuario: '.$idusuario;  
echo 'idvideo: '.$idvideo;
?>

<br><br><br>
<a href="read_categorias_videos.php">Regresar</a>
