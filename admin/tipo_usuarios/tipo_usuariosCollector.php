<?php

include_once('tipo_usuarios.php');
include_once('../Collector.php');

class tipo_usuariosCollector extends Collector{
    
    function showTipoUsuarios(){
        $rows = self::$db->getRows("SELECT * FROM tipo_usuarios  order by idtipo_usuarios"); 
        echo "Tipos De Usuarios";
        $tipo_usuarios = array();
        foreach ($rows as $c){
            $aux = new tipo_usuarios($c{'idtipo_usuarios'},$c{'id_usuario'},$c{'detalle'});
      array_push($tipo_usuarios, $aux);        
        }
        return  $tipo_usuarios; 
    }
    
  
  function createTipoUsuarios($detalle) {
    $rows = self::$db->insertRow("INSERT into tipo_usuarios (detalle) values ('$detalle')", null);             
  }
    
  function deleteTipoUsuarios($idtipo_usuarios) {
    $rows = self::$db->deleteRow("DELETE FROM tipo_usuarios where idtipo_usuarios = $idtipo_usuarios", null);             
  }
    
  function updateTipoUsuarios($idtipo_usuarios, $detalle) {
    $rows = self::$db->updateRow("UPDATE  tipo_usuarios SET detalle='$detalle' WHERE idtipo_usuarios=$idtipo_usuarios", null);             
  }
    
}

?>