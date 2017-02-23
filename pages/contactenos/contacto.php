<?php
session_start();

?>

<?php
if (isset($_SESSION['k_username'])) {
echo 'Bienvenido, ';
 echo '<b>'.$_SESSION['k_username'].'</b>';
 echo '<p><a href="../log-in/logout.php">Logout</a></p>';
}else{
echo ' ';
}
?>

<!DOCTYPE HTML>

<html>
   <head> 
      <title>  W00tflix - Contactos</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="../../assets/css/contactos.css" />
   </head>
   <body>

      <!-- Header -->
         <header id="header">
            <h1><a href="#">W00tflix - Contáctenos<span></span></a></h1>
            <a href="#menu">Menu</a>
         </header>

      <!-- Nav -->
         <nav id="menu">
            <ul class="links">
               <?php
	if (isset($_SESSION['k_username'])) {
	echo '<li><a href="../../index2.php">Home</a></li>'; 
	}else{
	echo '<li><a href="../../index.php">Home</a></li>'; 
	}
	?>
               <li><a href="../quienes_somos/quienes_somos.php">Acerca de</a></li>
               <li><a href="../contactenos/contacto.php">Contactenos</a></li>
              <?php
	if (isset($_SESSION['k_username'])) {
	echo '<li><a href="../log-in/logout.php">Logout</a></li>'; 
	}else{
	echo '<li><a href="../log-in/login.php">Login</a></li>'; 
	}
	?>
            </ul>
         </nav>
            
      <!-- Main -->
         <div id="main">

         <!-- One -->
            <section class="wrapper style1">
               <div class="inner">
                  <header class="align-center">
                     <h2>Contactos</h2>
                  </header>
                    <form action="#" method="post" >
                        
                        <label>Nombre: </label>
                        <input type="text" autocomplete="on">
                        <label>Correo: </label>
                        <input type="text" autocomplete="on" placeholder="micorreo@correo.com">
                        <label>Comentario: </label>
                        <input type="text" placeholder="escriba su sugerencias o comentarios">
                        <br>
                        <center><input type="submit"></center>
                        
                    </form>
                </div>
             </section>


         <!-- Three -->
            

         </div>

      <!-- Footer -->
         <footer id="footer">
            <div class="inner">
               
            </div>
            <div class="copyright">
               <ul class="icons">
                  <li><a href="http://www.twitter.com" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                  <li><a href="http://www.facebook.com" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                  <li><a href="http://www.instagram.com" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                  <li><a href="http://www.snapchat.com" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
               </ul>
               &copy; W00tflix. Design: <a href="">Equipo de Diseño </a>. Images: <a href="">Juan Carlos Carrera</a>. Video: <a href="">Hugo Clavijo</a>.
            </div>
         </footer>

      <!-- Scripts -->
         <script src="../../assets/js/jquery.min.js"></script>
         <script src="../../assets/js/jquery.scrolly.min.js"></script>
         <script src="../../assets/js/skel.min.js"></script>
         <script src="../../assets/js/util.js"></script>
         <script src="../../assets/js/main.js"></script>

   </body>
</html>
