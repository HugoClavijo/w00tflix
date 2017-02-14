<?php

class categorias_videos{
    private $idhistorial;
    private $idusuario;
    private $idvideo;
    private $fecha_entrada;
    private $hora_entrada;

    function __construct($idhistorial, $idusuario, $idvideo, $fecha_entrada, $hora_entrada ){
        $this->idhistorial = $idchistorial;
         $this->idusuario = $idusuario;
        $this->idvideo = $idvideo;
        $this->fecha_entrada = $fecha_entrada;
        $this->hora_entrada = $hora_entrada;
    }
    
    
     function setIdHistorial($idhistorial){
       $this->idhistorial = $idhistorial;
     } 
    
     function getIdHistorial(){
       return $this->idhistorial;
     }    
    
     function setIdUsuario($idusuario){
       $this->idusuario = $idusuario;
     } 
    
     function getIdUsuario(){
       return $this->idusuario;
     }     
    
     function setIdVideo($idvideo){
       $this->idvideo = $idvideo;
     } 
    
     function getIdVideo(){
       return $this->idvideo;
     }     
    
    function setFecha_Entrada($fecha_entrada){
        $this->fecha_entrada = $fecha_entrada;
    }
    
    function getFecha_Entrada(){
        return $this->fecha_entrada;
    }
    
    function setHora_Entrada ($hora_entrada) {
        $this->hora_entrada = $hora_entrada;
    }
    
    function getHora_Entrada () {
        return $this->hora_entrada;
    }

}

?>