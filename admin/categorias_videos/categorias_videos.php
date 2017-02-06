<?php

class categorias_videos{
    private $idcategorias;
    private $nombre;
    private $descripcion;

    function __construct($idcategorias, $nombre, $descripcion){
        $this->idcategorias = $idcategorias;
         $this->nombre = $nombre;
        $this->descripcion = $descripcion;         
    }
    
    
     function setIdCategorias($idcategorias){
       $this->idcategorias = $idcategorias;
     } 
     function getIdCategorias(){
       return $this->idcategorias;
     }     
    
    
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }     
    
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     }     
    
}

?>