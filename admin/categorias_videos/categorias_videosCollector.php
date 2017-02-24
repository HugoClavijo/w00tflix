<?php


include_once('categorias_videos.php');
include_once('../Collector.php');

class categorias_videosCollector extends Collector{
    
    function showCategoriasVideos(){
        $rows = self::$db->getRows("SELECT * FROM categorias  order by idcategoria"); 
    
        $categorias_videos = array();
        foreach ($rows as $c){
            $aux = new categorias_videos($c{'idcategoria'},$c{'nombre'},$c{'descripcion'},$c{'fecha'});
      array_push($categorias_videos, $aux);        
        }
        return  $categorias_videos; 
    }
      
    
  function createCategoriasVideos($nombre, $descripcion, $fecha) {
    $rows = self::$db->insertRow("INSERT into categorias (nombre, descripcion, fecha) values ('$nombre', '$descripcion', '$fecha')", null);             
  }
    
    
  function deleteCategoriasVideos($idcategorias) {
    $rows = self::$db->deleteRow("DELETE FROM categorias where idcategoria = $idcategorias", null);             
  }
    
  function updateCategoriasVideos($idcategorias, $nombre, $descripcion, $fecha) {
    $rows = self::$db->updateRow("UPDATE  categorias SET nombre='$nombre', descripcion='$descripcion', fecha='$fecha' WHERE idcategoria=$idcategorias", null);             
  }
        
}

?>
