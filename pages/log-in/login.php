<?php
session_start();
?>


<!DOCTYPE html>
<html>
  <head>
    <title>W00tflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="../../index.php">W00tflix</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>


	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>INGRESAR</h6>
			                
	                            <div class="division">
	                                <hr>	                                
	                            </div>
	                       

<form action="verifica_usuario.php" method="post">
<input class="form-control" type="text" name="usuario" placeholder="Ususario" size="20" maxlength="20" />
<br />
<input class="form-control" type="password" name="password" placeholder="contraseña" size="10" maxlength="10" />
<br />
<input class="btn btn-primary signup" type="submit" value="LOGIN" />
</form>
			               
					
			                </div>                
			            </div>
			        </div>

			        <div class="already">
			            <p>No tienes cuenta?</p>
			            <a href="signup.php">Registrate</a>
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
