<?php
session_start();
include_once("mensajes_recibidosCollector.php");

$id =1;

$MenRecObj = new mensajes_recibidosCollector();

foreach ($$MenRecObj->showMensajesRecibidos() as $c){
  echo "<div>";
  echo $c->getIdMensajes_Recibidos() . "  -- " .$c->getIdUsuario(). "  -- " .$c->getMensaje();
  echo " ";
  echo "<a href='update.php?iddetalles=".$c->getIdCategorias()."&nombre="  .$c->getNombre()."&descripcion="  .$c->getMensaje(). "'>editar</a>";
  echo " ";
  echo "<a href='delete_mensajes_recibidos.php?idmensajes_recibidos=".$c->getIdMensajes_Recibidos()."'>eliminar</a>";
     
 echo "</div>"; 
}

echo "<br><br>";
echo " ";
echo "<a href='create.php'>Crear</a>";		


?>