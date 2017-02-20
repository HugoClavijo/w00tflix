<?php
session_start();

$nombre =$_GET['nombre'];
$descripcion =$_GET['descripcion'];

include_once('../dataBase.php');

include_once("categorias_videosCollector.php");
$cateVideosCollectorObj = new categorias_videosCollector();
$cateVideosCollectorObj->createCategoriasVideos($nombre, $descripcion);
echo "Categoria Creada<br><br>";
echo 'nombre: '.$nombre;  
echo 'descripcion: '.$descripcion;
?>

<br><br><br>
<a href="read_categorias_videos.php">Regresar</a>
