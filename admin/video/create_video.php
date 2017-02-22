<?php
session_start();

$idusuario =$_GET['idusuario'];
$idvideo =$_GET['idvideo'];
$fecha_entrada =$_GET['fecha_entrada'];
$hora_entrada =$_GET['hora_entrada'];

include_once('../dataBase.php');

include_once("historialCollector.php");
$historialcollectorObj = new detalle_historialCollector();
$historialcollectorObj->createHistorial($idusuario, $idvideo, $fecha_entrada, $hora_entrada);
echo "Historial Creado<br><br>";
echo 'usuario: '.$idusuario;  
echo 'video: '.$idvideo;
echo 'fecha: '.$fecha_entrada;  
echo 'hora: '.$hora_entrada;
?>

<br><br><br>
<a href="read_historial.php">Regresar</a>