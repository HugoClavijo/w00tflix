<?php
session_start();
?>

<!DOCTYPE HTML>

<html>
   <head>
      <title>W00tflix</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="assets/css/main.css" />
   </head>
   <body>
       
       
       
<?php


if (isset($_SESSION['carrera'])){    
header('Location: index2.php');
}else{


?>
    
       
       
      <!-- Header -->
         <header id="header">
            <h1><a href="#">W00tflix<span></span></a></h1>
            <a href="#menu">Menu</a> 
         </header>

     <!-- Nav -->
         <nav id="menu">
            <ul class="links">
               <li><a href="index.php">Home</a></li>
               <li><a href="pages/quienes_somos/quienes_somos.php">Acerca de</a></li>
               <li><a href="pages/contactenos/contacto.php">Contáctenos</a></li>
               <li><a href="pages/login/login.php">Login</a></li>
            </ul>
         </nav>
    
         
            <section id="banner" data-video="images/banner0">
               <div class="inner">
                  <header>
                     <h1>W00tflix</h1>
                     <p>Tu mejor alternativa en entretenimiento e interaccion.</p>
                  </header>
                  <a href="pages/login/login.php" class="button big alt scrolly">Comenzar</a>
                  <!--a href="#main" class="button big alt scrolly">Ver mas</a-->
               </div>

            </section>

      
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
               &copy; W00tflix. Design: <a href="">Hugo Clavijo</a>. Images: <a href="">Juan Carlos Carrera</a>. Video: <a href="">Carlos Monroy</a>.
            </div>
         </footer>

      <!-- Scripts -->
         <script src="assets/js/jquery.min.js"></script>
         <script src="assets/js/jquery.scrolly.min.js"></script>
         <script src="assets/js/skel.min.js"></script>
         <script src="assets/js/util.js"></script>
         <script src="assets/js/main.js"></script>

   </body>
</html>


<?php

}
?>