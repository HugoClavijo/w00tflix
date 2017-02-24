<?php
//AQUI CONECTAMOS A LA BASE DE DATOS DE POSTGRES
//$conex = "host=localhost port=5432 dbname=wootflix user=postgres password=postgres";
$conex = "host=ec2-54-83-47-194.compute-1.amazonaws.com port=5432 dbname=d6qllf068lhdn5 user=joxdnzutsohxym password=219905459ac4abd0692899069a8fdeba4a9504e487b9e9eaeb2b11473627cab2";
$cnx = pg_connect($conex) or die ("<h1>Error de conexion.</h1> ". pg_last_error());
session_start();

function quitar($mensaje)
{
 $nopermitidos = array("'",'\\','<','>',"\"");
 $mensaje = str_replace($nopermitidos, "", $mensaje);
 return $mensaje;
}
if(trim($_POST["usuario"]) != "" && trim($_POST["password"]) != "")
{
 // Puedes utilizar la funcion para eliminar algun caracter en especifico
 //$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
 //$password = $HTTP_POST_VARS["password"];
 // o puedes convertir los a su entidad HTML aplicable con htmlentities
 $usuario = strtolower(htmlentities($_POST["usuario"], ENT_QUOTES));
 $password = $_POST["password"];
 $result = pg_query('SELECT pass, usuario, tipo_usuario FROM usuarios WHERE usuario=\''.$usuario.'\'');
 if($row = pg_fetch_array($result)){
  if($row["pass"] == $password){
   $_SESSION["k_username"] = $row['usuario'];
 if($row["tipo_usuario"] == 1){
	header("location: ../../admin/index.php");
 }else{
	header("location: ../../index2.php");
 }
	
	
   //echo 'Has sido logueado correctamente '.$_SESSION['k_username'].' <p>';
   //echo '<a href="index.php">Index</a></p>';
   //Elimina el siguiente comentario si quieres que re-dirigir automáticamente a index.php
   /*Ingreso exitoso, ahora sera dirigido a la pagina principal.
   <SCRIPT LANGUAGE="javascript">
   location.href = "index.php";
   </SCRIPT>*/
  }else{
   echo 'Password incorrecto';
	echo '<script>window.location.href = "login.php";</script>';	
  }
 }else{
  echo 'Usuario no existente en la base de datos';
	echo '<script>window.location.href = "login.php";</script>';
 }
 pg_free_result($result);
}else{
 echo 'Debe especificar un usuario y password';
}
pg_close();
?>
