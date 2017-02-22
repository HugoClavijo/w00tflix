<?php
session_start();

?>


<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>admin</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="../../estilos.css" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="alternate" title="Pozolería RSS" type="application/rss+xml" href="/feed.rss" />


    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="../assets/css/styles.css" rel="stylesheet">

	<link href="../assets/css/buttons.css" rel="stylesheet">
</head>
 
<body>

<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php">Administrador</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <!--<div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>-->
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi cuenta<b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="../pages/log-in/login.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>



<?php


?>

<div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="usuarios/read_usuarios.php"><i class="glyphicon glyphicon-user"></i> Usuarios</a></li>
                    <li><a href="tipo_usuarios/read_tipo_usuarios.php"><i class="glyphicon glyphicon-barcode"></i> Tipo De Usuarios</a></li>
                    <li><a href="categorias_videos/read_categorias_videos.php"><i class="glyphicon glyphicon-cog"></i> Categorias Videos</a></li>
                    <li><a href="usuariosbloqueados/read_usuarios_bloqueados.php"><i class="glyphicon glyphicon-ban-circle"></i> Usuarios Bloqueados</a></li>
                    <li><a href="mensajesenviados/read_mensajes_enviados.php"><i class="glyphicon glyphicon-send"></i> Mensajes Enviados</a></li>
                    <li><a href="detallevideos/read_detalle_videos.php"><i class="glyphicon glyphicon-film"></i> Detale Videos</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="../pages/log-in/login.php">Login</a></li>
                            <li><a href="../pages/log-in/signup.php">Signup</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

   <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/tables.js"></script>


</body>
</html>


