<?php

include_once('historial.php');
include_once('../Collector.php');

class historial_collector extends Collector{
    
    function showHistorial(){
        $rows = self::$db->getRows("SELECT * FROM historial order by idhistorial"); 
        echo "Historial";
        $historial = array();
        foreach ($rows as $c){
            $aux = new historial($c{'idhistorial'},$c{'idusuario'},$c{'idvideo'},$c{'fecha_entrada'},$c{'hora_entrada'});
      array_push($historial, $aux);        
        }
        return  $historial; 
    }
      
    
  function createHistorial($idusuario, $idvideo, $fecha_entrada, $hora_entrada) {
    $rows = self::$db->insertRow("INSERT into historial (idusuario, idvideo, fecha_entrada, hora_entrada) values ('$idusuario', '$idvideo', '$fecha_entrada', '$hora_entrada')", null);             
  }
    
    
  function deleteHistorial($idhistorial) {
    $rows = self::$db->deleteRow("DELETE FROM historial where idhistorial = $idhistorial", null);             
  }
    
  function updateHistorial($idhistorial, $idusuario, $idvideo, $fecha_entrada, $hora_entrada) {
    $rows = self::$db->updateRow("UPDATE  historial SET idusuario='$idusuario', idvideo='$idvideo', fecha_entrada='$fecha_entrada', hora_entrada='$hora_entrada' WHERE idhistorial=$idhistorial", null);             
  }
        
}

?>