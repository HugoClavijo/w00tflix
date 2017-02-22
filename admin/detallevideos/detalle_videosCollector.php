<?php


include_once('detalle_videos.php');
include_once('../Collector.php');

class detalle_videosCollector extends Collector{
    
    function showDetalleVideos(){
        $rows = self::$db->getRows("SELECT * FROM detalle_videos  order by iddetalles"); 
        $detalle_videos = array();
        foreach ($rows as $c){
            $aux = new detalle_videos($c{'iddetalles'},$c{'descripcion'});
      array_push($detalle_videos, $aux);        
        }
        return  $detalle_videos; 
    }
    
    
    
  function createDetalleVideos($descripcion) {
    $rows = self::$db->insertRow("INSERT into detalle_videos (descripcion) values ('$descripcion')", null);             
  }
    
    
    
    
    
  function deleteDetalleVideos($iddetalles) {
    $rows = self::$db->deleteRow("DELETE FROM detalle_videos where iddetalles = $iddetalles", null);             
  }
    
  function updateDetalleVideos($iddetalle, $descripcion) {
    $rows = self::$db->updateRow("UPDATE  detalle_videos SET descripcion='$descripcion' WHERE iddetalles=$iddetalle", null);             
  }
  
    
    
}

?>
