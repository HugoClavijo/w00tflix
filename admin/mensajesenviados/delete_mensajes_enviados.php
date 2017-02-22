<?php
session_start();
$idMensaje_enviado =$_GET['idMensaje_enviado'];


include_once('../dataBase.php');

include_once("mensajes_enviadosCollector.php");
$mensajeCollectorObj = new mensajes_enviadosCollector();
$mensajeCollectorObj->deleteMensajes_enviados($idMensaje_enviado);
   
//header("Location: read_demo.php");
?>





<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>Titulo de la web</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="../../estilos.css" />

    <!-- Bootstrap -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="../../assets/css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

</head>
 
<body>

<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1> 
				<a href="#"> Mensajes enviados
				</a>
			 </h1>
	              </div>
	           </div>
	        </div>
	     </div>
</div>

	



<br><br>

<center><p> **Se ha borrado con éxito** </p></center>

<br><br><br> 


<div class="panel-body">






<br><br><br>
		     
   
<center>
<a class="btn btn-primary" href="read_mensajes_enviados.php">Regresar</a>

</center>
   
</div>
                                        	 

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

