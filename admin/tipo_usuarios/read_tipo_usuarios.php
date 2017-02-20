<?php
session_start();
include_once("tipo_usuariosCollector.php");

$id =1;

$tipoObj = new tipo_usuariosCollector();

//echo "Usuario : " . $_SESSION['carrera'] . "<br>";
//echo "<br><br>";
//echo "<a href='logout.php'>salir</a>";
//echo "<br>hola<br>";

foreach ($tipoObj->showTipoUsuarios() as $c){
  echo "<div>";
  echo $c->getIdTipoUsusarios() . "  -- " .$c->getDetalle();
  echo " ";
  echo "<a href='update.php?idtipo_usuarios=".$c->getIdTipoUsusarios()."&detalle="  .$c->getDetalle(). "'>editar</a>";
  echo " ";
  echo "<a href='delete_tipo_usuarios.php?idtipo_usuarios=".$c->getIdTipoUsusarios()."'>eliminar</a>";     
 echo "</div>"; 
}

echo "<br><br>";
echo " ";
echo "<a href='create.php'>Crear</a>";		

?>
