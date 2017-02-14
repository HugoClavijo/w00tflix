<?php
session_start();
include_once("historial_collector.php");

$id =1;

$historialObj = new historial_collector();


foreach ($historialObj->showHistorial() as $c){
  echo "<div>";
  echo $c->getIdHistorial() . "  -- " .$c->getIdUsuario(). "  -- " .$c->getIdVideo() "  -- " 
      .$c->getFecha_Entrada(). " -- " .$c->getHora_Entrada();
  echo " ";
  
    echo "<a href='update.php?iddetalles=".$c->getIdCategorias()."&nombre="  .$c->getNombre()."&descripcion="  .$c->getDescripcion(). "'>editar</a>";
  
  echo " ";
  echo "<a href='delete_historial.php?idhistorial=".$c->getIdHistorial()."'>eliminar</a>";
     
 echo "</div>"; 
}

echo "<br><br>";
echo " ";
echo "<a href='create.php'>Crear</a>";		


?>