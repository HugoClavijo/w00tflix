<?php


include_once('categorias_videos.php');
include_once('../Collector.php');

class categorias_videosCollector extends Collector{
    
    function showCategoriasVideos(){
        $rows = self::$db->getRows("SELECT * FROM categorias  order by idcategoria"); 
        echo "Categorias De Videos";
        $categorias_videos = array();
        foreach ($rows as $c){
            $aux = new categorias_videos($c{'idcategoria'},$c{'nombre'},$c{'descripcion'});
      array_push($categorias_videos, $aux);        
        }
        return  $categorias_videos; 
    }
      
    
  function createCategoriasVideos($nombre, $descripcion) {
    $rows = self::$db->insertRow("INSERT into categorias (nombre, descripcion) values ('$nombre', '$descripcion')", null);             
  }
    
    
  function deleteCategoriasVideos($idcategorias) {
    $rows = self::$db->deleteRow("DELETE FROM categorias where idcategoria = $idcategorias", null);             
  }
    
  function updateCategoriasVideos($idcategorias, $nombre, $descripcion) {
    $rows = self::$db->updateRow("UPDATE  categorias SET nombre='$nombre', descripcion='$descripcion' WHERE idcategoria=$idcategorias", null);             
  }
        
}

?>
