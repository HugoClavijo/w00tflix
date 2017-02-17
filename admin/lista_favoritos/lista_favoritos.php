<?php

class categorias_videos{
    private $idlista_favoritos;
    private $idusuario;
    private $idvideo;

    function __construct($idlista_favoritos, $idusuario, $idvideo){
        $this->idlista_favoritos = $idlista_favoritos;
         $this->idusuario = $idusuario;
        $this->idvideo = $idvideo;         
    }
    
    
     function setIdLista_Favoritos($idlista_favoritos){
       $this->idlista_favoritos = $idlista_favoritos;
     } 
     function getIdLista_Favoritos(){
       return $this->idlista_favoritos;
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
    
}

?>