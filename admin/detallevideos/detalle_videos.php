<?php

class detalle_videos{
    private $idDetalles;
    private $descripcion;

    function __construct($idDetalles,$descripcion){
        $this->idDetalles = $idDetalles;
        $this->descripcion = $descripcion;
          
    }
    
    
     function setIdDetalles($idDetalles){
       $this->idDetalles = $idDetalles;
     } 
     function getIdDetalles(){
       return $this->idDetalles;
     }     
    
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     }     

    

    
}



?>