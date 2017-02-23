<?php
  session_start();

$idcategorias =$_GET['idcategoria'];
$nombre =$_GET['nombre'];
$descripcion =$_GET['descripcion'];

?>


<?php
if (isset($_SESSION['k_username'])) {
echo 'Bienvenido, ';
echo '<b>'.$_SESSION['k_username'].'</b>.';
echo "<br><br>";
}else{
echo '<script>window.location.href = "../../pages/log-in/login.php";</script>';
}
?>




<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>admin</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="../../estilos.css" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="alternate" title="Pozolería RSS" type="application/rss+xml" href="/feed.rss" />


   <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="../../assets/css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="../../assets/vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="../../assets/vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="../../assets/vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="../../assets/css/forms.css" rel="stylesheet">
</head>
 
<body>

<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1> <a href="#"> Categoria videos </a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
</div>


<div class="row">
<div class="content-box-large">
<div class="panel-heading">
<div class="panel-body">
 <form class="form-horizontal" action="update_categorias_videos.php" method="GET"  role="form" enctype="multipart/form-data">


								  <div class="form-group">
								    <label class="col-sm-2 control-label" for="idcategoria">Id categoria</label>
								    <div class="col-sm-2 col-md-2">
								      <input class="form-control" id="idcategoria" readonly=""  name="idcategoria" type="text" value="<?php print $idcategorias; ?>">
								    </div>
								  </div>




								  <div class="form-group">
								    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
								    <div class="col-sm-7">
								      <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="Ej. Jose Eduardo Perez" value="<?php print $nombre; ?>">
								    </div>
								  </div>


								  <div class="form-group">
								    <label for="descripcion" class="col-sm-2 control-label">Correo</label>
								    <div class="col-sm-7">
								      <input type="text" class="form-control" id="descripcion"  name="descripcion" placeholder="tucorreo@hotmail.com" value="<?php print $descripcion; ?>">
								    </div>
								  </div>









								  <!--div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <div class="checkbox">
								        <label>
								          <input type="checkbox"> Checkbox
								        </label>
								      </div>
								      <div class="checkbox">
								        <label>
								          <input type="checkbox"> Checkbox
								        </label>
								      </div>
								    </div>
								  </div-->


								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-primary">Editar</button>
<a class="btn btn-primary" href="read_categorias_videos.php">Regresar</a>
                                        	 

								    </div>
								  </div>
								</form>


</div>
</div>
</div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

    <script src="../../assets/vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="../../assets/vendors/select/bootstrap-select.min.js"></script>

    <script src="../../assets/vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="../../assets/vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="../../assets/vendors/moment/moment.min.js"></script>

    <script src="../../assets/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="../../assets/vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="../../assets/vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="../../assets/js/custom.js"></script>
    <script src="../../assets/js/forms.js"></script>


</body>
</html>


