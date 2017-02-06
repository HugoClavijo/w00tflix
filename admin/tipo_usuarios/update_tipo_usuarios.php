<?php
session_start();

$idtipo_usuarios=$_GET['idtipo_usuarios'];
$detalle =$_GET['detalle'];

include_once('../dataBase.php');
include_once("tipo_usuariosCollector.php");

$CollectorObj = new tipo_usuariosCollector();
$CollectorObj->updateTipoUsuarios($idtipo_usuarios, $detalle);

echo "Tipo De Usuario: ";  
 echo " idtipo_usuarios:".$idtipo_usuarios.", detalle:".$detalle;
     
echo "<br><a href='read_tipo_usuarios.php'>Regresar</a>";     
?>
