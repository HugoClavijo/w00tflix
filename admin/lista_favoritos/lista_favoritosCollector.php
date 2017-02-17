<?php


include_once('categorias_videos.php');
include_once('../Collector.php');

class categorias_videosCollector extends Collector{
    
    function showListaFavoritos(){
        $rows = self::$db->getRows("SELECT * FROM lista_favoritos order by idlista_favoritos"); 
        echo "Lista de Favoritos";
        $lista_favoritos = array();
        foreach ($rows as $c){
            $aux = new lista_favoritos($c{'idlista_favoritos'},$c{'idusuario'},$c{'idvideo'});
      array_push($lista_favoritos, $aux);        
        }
        return  $lista_favoritos; 
    }
      
    
  function createListaFavoritos($idusuario, $idvideo) {
    $rows = self::$db->insertRow("INSERT into lista_favoritos (idusuario, idvideo) values ('$idusuario', '$idvideo')", null);             
  }
    
    
  function deleteListaFavoitos($idlista_favoritos) {
    $rows = self::$db->deleteRow("DELETE FROM lista_favoritos where idlista_favoritos = $idlista_Favoritos", null);             
  }
    
  function updateListaFavoritos($idlista_favoritos, $idusuario, $idvideo) {
    $rows = self::$db->updateRow("UPDATE lista_Favoritos SET idusuario='$idusuario', idvideo='$idvideo' WHERE idlista_favoritos=$idlista_favoritos", null);             
  }
        
}

?>