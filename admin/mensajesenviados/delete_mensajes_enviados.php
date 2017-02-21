<?php
session_start();
$idMensaje_enviado =$_GET['idMensaje_enviado'];


include_once('../dataBase.php');

include_once("mensajes_enviadosCollector.php");
$mensajeCollectorObj = new mensajes_enviadosCollector();
$mensajeCollectorObj->deleteMensajes_enviados($idMensaje_enviado);

echo "Registro Borrado= ";  
 echo 'Id del mensaje: '.$idMensaje_enviado;
     
echo "<br><a href='read_mensajes_enviados.php'>Regresar</a>";   
//header("Location: read_demo.php");
?>
