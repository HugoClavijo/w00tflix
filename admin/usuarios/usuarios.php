<?php

class usuarios{
    private $idusuarios;
    private $nombre;
    private $correo;
    private $tipo;
     private $usuario;
      private $pass;

    function __construct($idusuarios,$nombre, $correo, $tipo, $usuario, $pass){
        $this->idusuarios = $idusuarios;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->tipo = $tipo;    
        $this->usuario = $usuario;
        $this->pass = $pass;
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
    
    function setUsuario($usuario){
       $this->usuario = $usuario;
     } 
     function getUsuario(){
       return $this->usuario;
     }     
     
     function setPass($pass){
       $this->pass = $pass;
     } 
     function getPass(){
       return $this->pass;
     }     
     
}

?>