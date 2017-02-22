<?php

include_once('video.php');
include_once('../Collector.php');

class video_collector extends Collector{
    
    function showHistorial(){
        $rows = self::$db->getRows("SELECT * FROM video order by idvideo"); 
        echo "Video";
        $historial = array();
        foreach ($rows as $c){
            $aux = new historial($c{'idvideo'},$c{'idusuario'},$c{'iddetalle'},$c{'idcategoria'},$c{'idranking'}, $c{'descripcion'});
      array_push($video, $aux);        
        }
        return  $video; 
    }
      
    
  function createVideo($idusuario, $iddetalle, $idcategoria, $idranking, $descripcion) {
    $rows = self::$db->insertRow("INSERT into video (idusuario, iddetalle, idcategoria, idranking, descripcion) values ('$idusuario', '$iddetalle', '$idcategoria', '$idranking', '$descripcion')", null);             
  }
    
    
  function deleteVideo($idvideo) {
    $rows = self::$db->deleteRow("DELETE FROM video where idvideo = $idvideo", null);             
  }
    
  function updateVideo($idvideo, $idusuario, $iddetalle, $idcategoria, $idranking, $descripcion) {
    $rows = self::$db->updateRow("UPDATE video SET idusuario='$idusuario', iddetalle='$iddetalle', idcategoria='$idcategoria', idranking='$idranking' WHERE idvideo=$ivideo", null);             
  }
        
}

?>