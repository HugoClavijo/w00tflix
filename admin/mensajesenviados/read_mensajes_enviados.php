<?php
session_start();
include_once("mensajes_enviadosCollector.php");
$mensajesObj = new mensajes_enviadosCollector();



//echo "Usuario : " . $_SESSION['carrera'] . "<br>";

//echo "<a href='logout.php'>salir</a>";



//foreach ($mensajesObj->showMensajes_enviados() as $c){
//  echo "<div>";
//  echo $c->getIdMensaje_enviado() . "  -- " .$c->getIdUsuario() . "  -- " .$c->getMensaje();
//  echo " ";
//  echo "<a href='update.php?idMensaje_enviado=".$c->getIdMensaje_enviado()."&idUsuario="  .$c->getIdUsuario()."&mensaje="  .$c->getMensaje(). "'>editar</a>";
//  echo " ";
//  echo "<a href='delete_mensajes_enviados.php?idMensaje_enviado=".$c->getIdMensaje_enviado()."'>eliminar</a>";
//     
// echo "</div>"; 
//}

?>




<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>Titulo de la web</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="../../estilos.css" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="alternate" title="Pozolería RSS" type="application/rss+xml" href="/feed.rss" />


    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="../../assets/css/styles.css" rel="stylesheet">
</head>
 
<body>

<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1> <a href="#">Mensajes enviados</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

<div class="col-md-10">

							
							
							
						</div>
		  				<div class="panel-body">
		  					<table class="table">
				              <thead>
				                <tr>
				                  <th>id</th>
				                  <th>Usuario</th>
				                  <th>Mensaje</th>
				                  <th></th>
				                  <th></th>
				                </tr>
				              </thead>

<?php
/*
foreach ($mensajesObj->showMensajes_enviados() as $c){
  echo "<div>";
  echo $c->getIdMensaje_enviado() . "  -- " .$c->getIdUsuario() . "  -- " .$c->getMensaje();
  echo " ";
  echo "<a href='update.php?idMensaje_enviado=".$c->getIdMensaje_enviado()."&idUsuario="  .$c->getIdUsuario()."&mensaje="  .$c->getMensaje(). "'>editar</a>";
  echo " ";
  echo "<a href='delete_mensajes_enviados.php?idMensaje_enviado=".$c->getIdMensaje_enviado()."'>eliminar</a>";
     
 echo "</div>"; 
}

*/


foreach ($mensajesObj->showMensajes_enviados() as $c){
echo "<tbody>";
echo "<tr> ";
  echo "<td>".$c->getIdMensaje_enviado() . " </td><td> " .$c->getIdUsuario(). " </td><td> " .$c->getMensaje(). " </td>";
  echo " ";
 echo "<td><a href='update.php?idMensaje_enviado=".$c->getIdMensaje_enviado()."&idUsuario="  .$c->getIdUsuario()."&mensaje="  .$c->getMensaje(). "'>editar</a></td>";
  echo " ";
  echo "<td><a href='delete_mensajes_enviados.php?idMensaje_enviado=".$c->getIdMensaje_enviado()."'>eliminar</a></td>";
     


}

?>
	
				            </table>
		  		
</div>
<?php
echo "<br><br>";
echo " ";
echo "<a href='create.php'>Crear</a>";

?>







 






  <link href="../../assets/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

   <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

    <script src="../../assets/vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="../../assets/vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="../../assets/js/custom.js"></script>
    <script src="../../assets/js/tables.js"></script>


</body>
</html>




