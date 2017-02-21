<?php

class mensajes_enviados{
    private $idMensaje_enviado;
    private $idUsuario;
    private $mensaje;
    
    
    function __construct( $idMensaje_enviado,$idUsuario,$mensaje){
    $this->idMensaje_enviado = $idMensaje_enviado;
    $this->idUsuario = $idUsuario;
    $this->mensaje = $mensaje;
    
    
    
    }
    
    
     function setIdMensaje_enviado($idMensaje_enviado){
       $this->idMensaje_enviado = $idMensaje_enviado;
     } 
     function getIdMensaje_enviado(){
       return $this->idMensaje_enviado;
     }     
    
      function setIdUsuario($idUsuario){
       $this->idUsuario = $idUsuario;
     } 
     function getIdUsuario(){
       return $this->idUsuario;
     } 
    
      function setMensaje($mensaje){
       $this->mensaje = $mensaje;
     } 
     function getMensaje(){
       return $this->mensaje;
     } 
    
    
    
    
}


?>