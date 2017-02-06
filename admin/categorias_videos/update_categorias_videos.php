<?php
session_start();

$idcategorias=$_GET['idcategorias'];
$nombre =$_GET['nombre'];
$descripcion =$_GET['descripcion'];

include_once('../dataBase.php');
include_once("categorias_videosCollector.php");

$CollectorObj = new categorias_videosCollector();
$CollectorObj->updateCategoriasVideos($idcategorias, $nombre, $descripcion)

echo "Categoria: ";  
 echo " idcategoria:".$idcategorias. ", nombre:".$nombre. ", descripcion:".$descripcion;
     
echo "<br><a href='read_categorias_videos.php'>Regresar</a>";    

?>
