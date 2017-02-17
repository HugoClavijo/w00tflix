<?php
session_start();

$idlista_favoritos =$_GET['idlista_favoritos'];
$idusuario =$_GET['idusuario'];
$idvideo =$_GET['idvideo'];

include_once('../dataBase.php');
include_once("lista_favoritosCollector.php");

$lisFavCollectorObj = new detalle_lisFaVCollector();
$lisFavCollectorObj->createListaFavoritos($idlista_favoritos, $idusuario, $idvideo);

echo "	Lista de Favoritos: ";  
 echo " idlista_favoritos:".$idlista_favoritos. ", idusuario:".$idusuario. ", idvideo:".$idvideo;
     
echo "<br><a href='read_lista_favoritos.php'>Regresar</a>";    

?>
