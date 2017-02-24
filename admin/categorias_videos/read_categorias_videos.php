<?php
session_start();
include_once("categorias_videosCollector.php");

$id =1;

$cateObj = new categorias_videosCollector();
	
?>




<!DOCTYPE html>
<html>
<head>
  <?php
if (isset($_SESSION['k_username'])) {
echo 'Bienvenido, ';
echo '<b>'.$_SESSION['k_username'].'</b>.';
echo '<p><a href="../../pages/log-in/logout.php">Logout</a></p>';
echo "<br><br>";
}else{
echo '<script>window.location.href = "../../pages/log-in/login.php";</script>';
}
?>

<title>admin</title>
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
	                 <h1> <a href="#">Categoria videos</a></h1>
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
				                  <th>Descripcion</th>
				                  <th>Nombre</th>
				                  <th>Fecha</th>
				                  <th></th>
				                </tr>
				              </thead>

<?php

/*
foreach ($cateObj->showCategoriasVideos() as $c){
  echo "<div>";
  echo $c->getIdCategorias() . "  -- " .$c->getDescripcion(). "  -- " .$c->getNombre();
  echo " ";
  echo "<a href='update.php?idcategoria=".$c->getIdCategorias()."&nombre="  .$c->getNombre()."&descripcion="  .$c->getDescripcion(). "'>editar</a>";
  echo " ";
  echo "<a href='delete_categorias_videos.php?idcategoria=".$c->getIdCategorias()."'>eliminar</a>";
     
 echo "</div>"; 
}
*/

foreach ($cateObj->showCategoriasVideos() as $c){
echo "<tbody>";
echo "<tr> ";
  echo "<td>".$c->getIdCategorias() . " </td><td>" .$c->getDescripcion(). " </td><td> " .$c->getNombre(). "</td><td>".$c->getFecha() . " </td>";
  echo " ";
  echo "<td><a href='update.php?idcategoria=".$c->getIdCategorias()."&nombre="  .$c->getNombre()."&descripcion="  .$c->getDescripcion(). "&fecha="  .$c->getFecha(). "'>editar</a></td>";
  echo " ";
  echo "<td><a href='delete_categorias_videos.php?idcategoria=".$c->getIdCategorias()."'>eliminar</a></td>";
     


}

?>
	
				            </table>
		  		
</div>




 
    <div class="panel-body">
<form class="form-horizontal" action="create.php" method="GET"  enctype="multipart/form-data">
<button type="submit" class="btn btn-primary">Crear</button>
<a class="btn btn-primary" href="../index.php">Regresar</a>

</form>

   
</div>





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








