<?php
session_start();
include_once("categorias_videosCollector.php");

$id =1;

$cateObj = new categorias_videosCollector();

//echo "Usuario : " . $_SESSION['carrera'] . "<br>";
//echo "<br><br>";
//echo "<a href='logout.php'>salir</a>";
//echo "<br>hola<br>";


foreach ($cateObj->showCategoriasVideos() as $c){
  echo "<div>";
  echo $c->getIdCategorias() . "  -- " .$c->getDescripcion(). "  -- " .$c->getNombre();
  echo " ";
  echo "<a href='update.php?iddetalles=".$c->getIdCategorias()."&nombre="  .$c->getNombre()."&descripcion="  .$c->getDescripcion(). "'>editar</a>";
  echo " ";
  echo "<a href='delete_categorias_Videos.php?idcategorias=".$c->getIdCategorias()."'>eliminar</a>";
     
 echo "</div>"; 
}

echo "<br><br>";
echo " ";
echo "<a href='create.php'>Crear</a>";		


?>
