<?php
session_start();
$idusuario_bloqueado=$_GET['idusuario_bloqueado'];


include_once('../dataBase.php');

include_once("usuarios_bloqueadosCollector.php");
$CollectorObj = new usuarios_bloqueadosCollector();
$CollectorObj->deleteUsuarios_bloqueados($idusuario_bloqueado);

echo "Registro Borrado: <br> ";  
 echo 'idusuario_bloqueado: '.$idusuario_bloqueado;
     
echo "<br><a href='read_usuarios_bloqueados.php'>Regresar</a>";   
//header("Location: read_demo.php");
?>
