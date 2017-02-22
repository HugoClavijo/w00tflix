<?php

class categorias_videos{
    private $idvideo;
    private $idusuario;
    private $iddetalle;
    private $idcategoria;
    private $idranking;
	private $descripcion;

    function __construct($idvideo, $idusuario, $iddetalle, $idcategoria, $idranking, $descripcion ){
        $this->idvideo = $idchistorial;
        $this->idusuario = $idusuario;
        $this->iddetalle = $iddetalle;
        $this->idcategoria = $idcategoria;
        $this->idranking = $idranking;
		$this->descripcion = $descripcion;
    }
    
    
     function setIdVideo($idvideo){
       $this->idvideo = $idvideo;
     } 
    
     function getIdVideo(){
       return $this->idvideo;
     }    
    
     function setIdUsuario($idusuario){
       $this->idusuario = $idusuario;
     } 
    
     function getIdUsuario(){
       return $this->idusuario;
     }     
    
     function setIdDetalle($iddetalle){
       $this->iddetalle = $iddetalle;
     } 
    
     function getIdDetalle(){
       return $this->iddetalle;
     }     
    
    function setIdCategoria($idcategoria){
        $this->idcategoria = $idcategoria;
    }
    
    function getIdCategoria(){
        return $this->idcategoria;
    }
    
    function setIdRanking ($idranking) {
        $this->idranking = $idranking;
    }
    
    function getIdRanking () {
        return $this->idranking;
    }

}

?>