<?php
  session_start();
$fecha_bloqueo=date("Y-m-d");
?>

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
	                 <h1> <a href="#"> Usuarios bloqueados</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
</div>


<div class="row">
<div class="content-box-large">
<div class="panel-heading">
<div class="panel-body">
 <form class="form-horizontal" action="create_usuarios_bloqueados.php" method="GET"  role="form" enctype="multipart/form-data">


								 




								  <div class="form-group">
								    <label for="fecha_bloqueo" class="col-sm-2 control-label">Fecha bloqueo</label>
								    <div class="col-sm-3">
								      <input type="text" class="form-control" id="fecha_bloqueo"  name="fecha_bloqueo" readonly="" value="<?php print $fecha_bloqueo; ?>">
								    </div>
								  </div>


								  <div class="form-group">
								    <label for="idusuario" class="col-sm-2 control-label">Id usuario</label>
								    <div class="col-sm-3">
								      <input type="text" class="form-control" id="idusuario"  name="idusuario" placeholder="Numero de usuario" >
								    </div>
								  </div>













			                                         <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-primary">Enviar</button>

<a class="btn btn-primary" href="read_usuarios_bloqueados.php">Regresar</a>

                                        	 

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




