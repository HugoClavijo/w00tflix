<?php


include_once('usuarios_bloqueados.php');
include_once('../Collector.php');

class usuarios_bloqueadosCollector extends Collector{  
    
    
    function showUsuarios_bloqueados(){
        $rows = self::$db->getRows("SELECT * FROM usuarios_bloqueados  order by idusuario_bloqueado"); 
       
        $usuarios_bloqueados = array();
        foreach ($rows as $c){
            $aux = new usuarios_bloqueados($c{'idusuario_bloqueado'},$c{'fecha_bloqueo'},$c{'idusuario'});      
      array_push($usuarios_bloqueados, $aux);        
        }
        return  $usuarios_bloqueados;  
    }
       
    
    
    
    
  function createUsuarios_bloqueados($fecha_bloqueo,$idusuario) {
    $rows = self::$db->insertRow("INSERT into usuarios_bloqueados (fecha_bloqueo,idusuario) values ('$fecha_bloqueo','$idusuario')", null);             
  }
    
    
    
  function deleteUsuarios_bloqueados($idusuario_bloqueado) {
    $rows = self::$db->deleteRow("DELETE FROM usuarios_bloqueados where idusuario_bloqueado =$idusuario_bloqueado", null);             
  }
    
  function updateUsuarios_bloqueados($idusuario_bloqueado, $fecha_bloqueo, $idusuario) {
    $rows = self::$db->updateRow("UPDATE  usuarios_bloqueados SET fecha_bloqueo='$fecha_bloqueo', idusuario='$idusuario' WHERE idusuario_bloqueado=$idusuario_bloqueado", null);             
  }
  
    
    
}

?>
