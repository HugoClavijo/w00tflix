<?php
session_start();
include_once("usuariosCollector.php");

$id =1;

$usersObj = new usuariosCollector();

//echo "Usuario : " . $_SESSION['carrera'] . "<br>";
//echo "<br><br>";
//echo "<a href='logout.php'>salir</a>";
//echo "<br>hola<br>";

foreach ($usersObj->showUsuarios() as $c){
  echo "<div>";
  echo $c->getIdUsuarios() . "  -- " .$c->getNombre(). "  -- " .$c->getCorreo(). "  -- " .$c->getTipo(). "  -- " .$c->getUsuario(). "  -- " .$c->getPass();
  echo " ";
  echo "<a href='update.php?idusuarios=".$c->getIdUsuarios()."&nombre="  .$c->getNombre()."&correo="  .$c->getCorreo()."&tipo="  .$c->getTipo()."&usuario="  .$c->getUsuario()."&pass="  .$c->getPass(). "'>editar</a>";
  echo " ";
  echo "<a href='delete_usuarios.php?idusuarios=".$c->getIdUsuarios()."'>eliminar</a>";
     
 echo "</div>"; 
}

echo "<br><br>";
echo " ";
echo "<a href='create.php'>Crear</a>";		


?>
