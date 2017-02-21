<?php


class usuarios_bloqueados{
    private $idUsuario_bloqueado;
    private $fecha_bloqueo;
    private $idUsuario;
    
    
    function __construct($idUsuario_bloqueado,$fecha_bloqueo,$idUsuario){
        $this->idUsuario_bloqueado = $idUsuario_bloqueado;
        $this->fecha_bloqueo = $fecha_bloqueo;
        $this-> idUsuario = $idUsuario;
    }
    
    
    function setIdUsuario_bloqueado($idUsuario_bloqueado){
       $this->idUsuario_bloqueado = $idUsuario_bloqueado;
     } 
     function getIdUsuario_bloqueado(){
       return $this->idUsuario_bloqueado;
     } 
     function setFecha_bloqueo($fecha_bloqueo){
       $this->fecha_bloqueo = $fecha_bloqueo;
     } 
     function getFecha_bloqueo(){
       return $this->fecha_bloqueo;
     } 
     function setIdUsuario($idUsuario){
       $this->idUsuario = $idUsuario;
     } 
     function getIdUsuario(){
       return $this->idUsuario;
     } 

    
    


}

?>