<?php
session_start();
include_once("lista_favoritosCollector.php");

$id =1;

$LisFavObj = new lista_favoritosCollector();


foreach ($LisFavObj->showListaFavoritos() as $c){
  echo "<div>";
  echo $c->getIdLista_Favoritos() . "  -- " .$c->getIdUsuario(). "  -- " .$c->getIdVideo();
  echo " ";
  echo "<a href='update.php?idlista_favoritos=".$c->getIdLista_Favoritos()."&nombre="  .$c->getIdUsuario()."&descripcion="  .$c->getIdVideo(). "'>editar</a>";
  echo " ";
  echo "<a href='delete_lista_favoritos.php?idlista_favoritos=".$c->getIdLista_Favoritos()."'>eliminar</a>";
     
 echo "</div>"; 
}

echo "<br><br>";
echo " ";
echo "<a href='create.php'>Crear</a>";		


?>
