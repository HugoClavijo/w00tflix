<?php


include_once('mensajes_enviados.php');
include_once('../Collector.php');

class mensajes_enviadosCollector extends Collector{
    
    function showMensajes_enviados(){
        $rows = self::$db->getRows("SELECT * FROM mensajes_enviados  order by idmensaje_enviado"); 
      
        $mensajes_enviados = array();
        foreach ($rows as $c){
            $aux = new mensajes_enviados($c{'idmensaje_enviado'},$c{'idusuario'},$c{'mensaje'});
      array_push($mensajes_enviados, $aux);        
        }
        return  $mensajes_enviados; 
    }
    
    
    
  function createMensajes_enviados($descripcion,$mensaje) {
    $rows = self::$db->insertRow("INSERT into mensajes_enviados (idusuario,mensaje) values ('$descripcion','$mensaje')", null);             
  }
    
    
    
    
    
  function deleteMensajes_enviados($idMensaje_enviado) {
    $rows = self::$db->deleteRow("DELETE FROM mensajes_enviados where idmensaje_enviado =$idMensaje_enviado", null);             
  }
    
  function updateMensajes_enviados($idmensaje_enviado, $idusuario, $mensaje) {
    $rows = self::$db->updateRow("UPDATE  mensajes_enviados SET idusuario='$idusuario', mensaje='$mensaje' WHERE idmensaje_enviado=$idmensaje_enviado", null);             
  }
  
    
    
}

?>
