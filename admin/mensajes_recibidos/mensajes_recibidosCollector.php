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
      
    
  function createMensajesRecibidos($idusuario, $mensaje) {
    $rows = self::$db->insertRow("INSERT into mensajes_recibidos (idusuario, mensaje) values ('$idusuario', '$mensaje')", null);             
  }
    
    
  function deleteCategoriasVideos($mensajes_recibidos) {
    $rows = self::$db->deleteRow("DELETE FROM mensajes_recibidos where idmensajes_recibidos = $idmensajes_recibidos", null);             
  }
    
  function updateCategoriasVideos($idmensajes_recibidos, $idusuario, $mensaje) {
    $rows = self::$db->updateRow("UPDATE mensajes_recibidos SET idusuario='$idusuario', mensaje='$mensaje' WHERE idmensajes_recibidos=$idmensajes_recibidos", null);             
  }
        
}

?>