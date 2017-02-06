<?php
session_start();
$idtipo_ususarios =$_GET['idtipo_ususarios'];

include_once('../dataBase.php');

include_once("tipo_usuariosCollector.php");
$tipoCollectorObj = new tipo_usuariosCollector();
$tipoCollectorObj->deleteTipoUsuarios($idtipo_usuarios);

echo "Registro Borrado= ";  
 echo 'Id: '.$idtipo_usuarios;
     
echo "<br><a href='read_tipo_usuarios.php'>Regresar</a>";   
//header("Location: read_demo.php");

?>
