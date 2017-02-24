<?
session_start();
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Ingreso</title>
  <!--link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="css/style.css">


</head>

<body>

<?php
echo $_SESSION['carrera'];

if (isset($_SESSION['carrera'])){    
//echo 'Se ha creado sesión <br>';
 header('Location: ../../index.php');

}else{

?>
    
    
      <!-- Header -->
    <header id="header">

            <h1><a href="../../index.php">W00tflix<span></span></a></h1>
    
    </header>
    
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Registrate</a></li>
        <li class="tab"><a href="#login">Ingresa</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <div class="tituloo">Registrate para entrar</div>
          

          <form action="../../index2.php" method="POST" enctype="multipart/form-data">

          
            <div class="top-row">
                <div class="field-wrap">
                  <label for="nombres">
                    Nombres<span class="req">*</span>
                  </label>
                  <input id="nombres"  name="nombres" type="text" required autocomplete="off" />
                </div>
                <div class="field-wrap">
                  <label for="apellidos">
                    Apellidos<span class="req">*</span>
                  </label>
                  <input id ="apellidos" name="apellidos"  type="text" required autocomplete="off"/>
                </div> 
              </div>
              <div class="field-wrap">
                <label  for="correo1">
                  Correo electrónico<span class="req">*</span>
                </label>
                <input name="correo1" type="email" required autocomplete="off"/>
              </div>
              
              <div class="field-wrap">
                <label for="contraseña1">
                  Contraseña<span class="req">*</span>
                </label>
                <input name="contraseña1" type="password" required autocomplete="off"/>
              </div>
              
              <button type="submit" class="button button-block">Empecemos</button> 
                 <br>
    		            <a href="https://www.facebook.com/"><img id="face_button" src="../../images/fb.png" width="30px" style="position:absolute; margin-left:0px; margin-top:5px; " /> <p id="face_text " style="position:absolute; margin-left:35px; margin-top:13px;">Entrar con facebook</p></a>
                <br>
          </form>

        </div>
        
        <div id="login">   
          <div class="tituloo">Bienvenido!</div>
          

          <form action="../../index2.php" method="POST" enctype="multipart/form-data">

          
          <div class="field-wrap">
            <label for="correo2">
              Correo electronico<span class="req">*</span>
            </label>
            <input name="correo2" type="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label for="contraseña2">
              Contraseña<span class="req">*</span>
            </label>
            <input name="contraseña2" type="password" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Olvidaste tu contraseña?</a></p>
          
          <button type="submit" class="button button-block" >Ingresa</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
    
    <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="js/index.js"></script>

   <script src="../assets/js/jquery.min.js"></script>
   <script src="../assets/js/jquery.scrolly.min.js"></script>
   <script src="../assets/js/skel.min.js"></script>
   <script src="../assets/js/util.js"></script>
   <script src="../assets/js/main.js"></script>
   
    </div>
</body>
</html>

<?php
}

?>