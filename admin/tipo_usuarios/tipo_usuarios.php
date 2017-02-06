<?php

class tipo_usuarios{
    private $idtipo_usuarios;
    private $detalle;

    function __construct($idtipo_usuarios,$detalle){
        $this->idtipo_usuarios = $idtipo_usuarios;
        $this->detalle = $detalle;        
    }
       
     function setIdTipoUsuarios($idtipo_usuarios){
       $this->idtipo_usuarios = $idtipo_usuarios;
     } 
     function getIdTipoUsusarios(){
       return $this->idtipo_usuarios;
     }     
    
     function setDetalle($detalle){
       $this->detalle = $detalle;
     } 
     function getDetalle(){
       return $this->detalle;
     }        
}

?>