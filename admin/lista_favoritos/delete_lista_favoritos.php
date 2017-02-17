<?php
session_start();
$idlista_favoritos =$_GET['idlista_favoritos'];

include_once('../dataBase.php');

include_once("lista_favoritosCollector.php");
$lisFavCollectorObj = new detalle_lisFaVCollector();
$lisFavCollectorObj->createListaFavoritos($idlista_favoritos);

echo "Video borrado de lista: ";  
 echo 'Id: '.$idlista_favoritos;
     
echo "<br><a href='read_lista_favoritos.php'>Regresar</a>";   

?>
