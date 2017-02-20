<?php
session_start();
$idcategorias =$_GET['idcategoria'];

include_once('../dataBase.php');

include_once("categorias_videosCollector.php");
$catesCollectorObj = new categorias_videosCollector();
$catesCollectorObj->deleteCategoriasVideos($idcategorias);

echo "Categoria Borrada: ";  
 echo 'Id: '.$idcategorias;
     
echo "<br><a href='read_categorias_videos.php'>Regresar</a>";   
//header("Location: read_demo.php");

?>
