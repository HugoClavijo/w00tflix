<?php
session_start();
$idhistorial =$_GET['idhistorial'];

include_once('../dataBase.php');

include_once("historial_Collector.php");
$historialCollectorObj = new historialCollector();
$historialCollectorObj->deletehistorial($idhistorial);

echo "Historial Borrado: ";  
echo 'Id: '.$idhistorial;
     
echo "<br><a href='read_historial.php'>Regresar</a>";  

?>
