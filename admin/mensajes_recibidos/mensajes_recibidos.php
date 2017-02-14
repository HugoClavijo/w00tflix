<?php

class categorias_videos{
    private $idmensajes_recibidos;
    private $idusuario;
    private $mensaje;

    function __construct($idmensajes_recibidos, $idusuario, $mensaje){
        $this->idmensajes_recibidos = $idmensajes_recibidos;
        $this->idusuario = $idusuario;
        $this->mensaje = $mensaje;         
    }
    
     function setIdMensajes_Recibidos($idmensajes_recibidos){
       $this->idmensajes_recibidos = $idmensajes_recibidos;
     } 
    
     function getIdMensajes_Recibidos(){
       return $this->idmensajes_recibidos;
     }     
    
     function setIdUsuario($idusuario){
       $this->idusuario = $idusuario;
     } 
    
     function getIdUsuario(){
       return $this->idusuario;
     }     
    
     function setMensaje($mensaje){
       $this->mensaje = $mensaje;
     } 
    
     function getMensaje(){
       return $this->mensaje;
     }     
    
}

?>