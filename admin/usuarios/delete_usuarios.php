<?php
session_start();
$idusuarios =$_GET['idusuarios'];

include_once('../dataBase.php');

include_once("usuariosCollector.php");
$usersCollectorObj = new usuariosCollector();
$usersCollectorObj->deleteUsuarios($idusuarios);

echo "Registro Borrado= ";  
 echo 'Id: '.$idusuarios;
     
echo "<br><a href='read_usuarios.php'>Regresar</a>";   
//header("Location: read_demo.php");

?>
