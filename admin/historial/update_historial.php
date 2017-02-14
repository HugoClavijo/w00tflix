<?php
session_start();

$idhistorial =$_GET['idhistorial'];
$idusuario =$_GET['idusuario'];
$idvideo =$_GET['idvideo'];
$fecha_entrada =$_GET['fecha_entrada'];
$hora_entrada =$_GET['hora_entrada'];

include_once('../dataBase.php');
include_once("historial_collector.php");

$CollectorObj = new historial_collector();
$CollectorObj->update_historial($idhistorial, $idusuario, $idvideo, $fecha_entrada, $hora_entrada)

echo "Historial: ";  
 echo " idhistorial:".$idhistorial. ", idusuario:".$idusuario. ", idvideo:".$idvideo. ", fecha_entrada:".$fecha_entrada. ", hora_entrada:".$hora_entrada;
     
echo "<br><a href='read_historial.php'>Regresar</a>";    

?>