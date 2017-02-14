<?php

include_once('mensajes_recibidos.php');
include_once('../Collector.php');

class mensajes_recibidosCollector extends Collector{
    
    function showCategoriasVideos(){
        $rows = self::$db->getRows("SELECT * FROM mensajes_recibidos  order by idmensajes_recibidos"); 
        echo "Mensajes Recibidos";
        $mensajes_recibidos = array();
        foreach ($rows as $c){
            $aux = new mensajes_rescibidos($c{'idmensajesr_recibidos'},$c{'idusuario'},$c{'mensaje'});
      array_push($mensajes_recibidos, $aux);        
        }
        return  $mensajes_recibidos; 
    }
      
    
  function createMensajesRecibidos($nombre, $descripcion) {
    $rows = self::$db->insertRow("INSERT into categorias (nombre, descripcion) values ('$nombre', '$descripcion')", null);             
  }
    
    
  function deleteCategoriasVideos($idcategorias) {
    $rows = self::$db->deleteRow("DELETE FROM categorias where idcategorias = $idcategorias", null);             
  }
    
  function updateCategoriasVideos($idcategorias, $nombre, $descripcion) {
    $rows = self::$db->updateRow("UPDATE  categorias SET nombre='$nombre', descripcion='$descripcion' WHERE idcategorias=$idcategorias", null);             
  }
        
}

?>