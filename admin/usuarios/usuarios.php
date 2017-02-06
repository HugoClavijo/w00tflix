<?php

class usuarios{
    private $idusuarios;
    private $nombre;
    private $correo;
    private $tipo;

    function __construct($idusuarios,$nombre, $correo, $tipo){
        $this->idusuarios = $idusuarios;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->tipo = $tipo;        
    }
    
    
     function setIdUsuarios($idusuarios){
       $this->idusuarios = $idusuarios;
     } 
     function getIdUsuarios(){
       return $this->idusuarios;
     }     
    
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }     

      function setCorreo($correo){
       $this->correo = $correo;
     } 
     function getCorreo(){
       return $this->correo;
     }     

     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     }     
    
}

?>