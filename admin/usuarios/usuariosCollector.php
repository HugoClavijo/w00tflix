<?php

include_once('usuarios.php');
include_once('../Collector.php');

class usuariosCollector extends Collector{
    
    function showUsuarios(){
        $rows = self::$db->getRows("SELECT * FROM usuarios  order by idusuarios"); 
        echo "Usuarios";
        $usuarios = array();
        foreach ($rows as $c){
            $aux = new usuarios($c{'idusuarios'},$c{'nombre'},$c{'correo'},$c{'tipo'});
      array_push($usuarios, $aux);        
        }
        return  $usuarios; 
    }
    
    
  function createUsuarios($nombre, $correo, $tipo) {
    $rows = self::$db->insertRow("INSERT into usuarios (nombe, correo, tipo) values ('$nombre', '$correo', '$tipo')", null);             
  }
    
      
  function deleteUsuarios($idusuarios) {
    $rows = self::$db->deleteRow("DELETE FROM usuarios where idusuarios = $idusuarios", null);             
  }
    
  function updateUsuarios($idusuarios, $nombre, $correo, $tipo) {
    $rows = self::$db->updateRow("UPDATE  usuarios SET nombre='$nombre', correo='$correo', nombre='$tipo' WHERE idusuarios=$idusuarios", null);             
  }
   
    
}

?>