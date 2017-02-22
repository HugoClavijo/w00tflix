<?php

include_once('usuarios.php');
include_once('../Collector.php');

class usuariosCollector extends Collector{
    
    function showUsuarios(){
        $rows = self::$db->getRows("SELECT * FROM usuarios  order by idusuarios"); 
        $usuarios = array();
        foreach ($rows as $c){
            $aux = new usuarios($c{'idusuarios'},$c{'nombre'},$c{'correo'},$c{'tipo_usuario'},$c{'usuario'},$c{'pass'});
      array_push($usuarios, $aux);        
        }
        return  $usuarios; 
    }
    
    
  function createUsuarios($nombre, $correo, $tipo, $usuario, $pass) {
    $rows = self::$db->insertRow("INSERT into usuarios (nombre, correo, tipo_usuario,usuario,pass) values ('$nombre', '$correo', '$tipo', '$usuario', '$pass')", null);             
  }
    
      
  function deleteUsuarios($idusuarios) {
    $rows = self::$db->deleteRow("DELETE FROM usuarios where idusuarios = $idusuarios", null);             
  }
    
  function updateUsuarios($idusuarios, $nombre, $correo, $tipo, $usuario, $pass) {
    $rows = self::$db->updateRow("UPDATE  usuarios SET nombre='$nombre', correo='$correo', tipo_usuario='$tipo' , usuario='$usuario' , pass='$pass' WHERE idusuarios=$idusuarios", null);             
  }
   
    
}

?>
