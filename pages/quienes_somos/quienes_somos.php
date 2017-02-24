<?php
session_start();

?>




<!DOCTYPE HTML>
<html>
   <head> 
   <?php
if (isset($_SESSION['k_username'])) {
echo 'Bienvenido, ';
 echo '<b>'.$_SESSION['k_username'].'</b>';
 echo '<p><a href="../log-in/logout.php">Logout</a></p>';
}else{
echo ' ';
}
?>
   
      <title>  W00tflix - Quiénes Somos</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="../../assets/css/quienessomos.css" />
   </head>
   <body>

      <!-- Header -->
         <header id="header">
            <h1><a href="#">W00tflix - Acerca de nosotros<span></span></a></h1>
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
               <li><a href="../contactenos/contacto.php">Contáctenos</a></li>              
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
                     <h2>Quienes Somos</h2>
                     <p>Somos un Servicio que permite la interacción y la participación con la comunidad artística/gráfica, ofreciendo un espacio diferente, donde puedan mostrar su talento y/u obras artísticas.</p>
                  </header>
                  <!-- 2 Column Video Section -->
                     <div class="flex flex-2">
                        <div class="video col">
                           <div class="image fit">
                              <img src="../../images/seleccion-de-personal.jpg" alt="" />
                           </div>
                           <p class="caption">
                            <center>
                              <a href="#main2" class="button big alt scrolly"><span><b>Nuestro Personal</b></span></a>
                            </center>
                           </p>
                           
                     </div>
                        <div class="video col">
                           <div class="image fit">
                              <img src="../../images/propuesta.jpg" alt="" />
                           </div>
                           <p class="caption">
                            <center>   
                                <a href="#main1" class="button big alt scrolly"><span><b>Misión y Visión</b></span></a>
                            </center>
                           </p>
                           
                        </div>
                     </div>
               </div>
            </section>
             
             <section class="wrapper style1">
                
                 <div id="main1">

             <!-- One -->
            <section class="wrapper style1">
               <div class="inner">
                  <header class="align-center">
                        <h2>W00tflix - tu alternativa en entretenimiento</h2>
                    </header>
                </div>
            </section>     
                <section class="wrapper style1">
                   <div class="inner">

                      <!-- 2 Column Video Section -->
                         <div class="flex flex-2">
                            <div class="video col">

                               <p class="caption">

                                  <b>Misión</b>

                            </p>
                            <center><p>Ofrecemos un espacio para La libre interacción y participación de la comunidad artística/gráfica, donde puedan mostrar su talento y obras artísticas                    gracias a la tecnologia, los artistas usarían este espacio para promocionarse en vivo como por ejemplo los videos de transmisión que ocurren a miles km de                       distancia y hoy en día pueden ser vistos por muchas personas gracias a la tecnologia del streaming.
                            </p></center>

                         </div>
                            <div class="video col">

                               <p class="caption">

                                  <b>Visión</b>
                               </p>

                            <center><p>Nuestra propuesta de Solución, es la implementación de una plataforma web y aplicativo móvil, y de esta manera generar el espacio exclusivo para la interacción      social/digital de artistas en diferentes disciplinas,características y géneros, ademas de incluir la interacción directa con artistas locales y extranjeros, cuyo espacio de expresión libre, o socialización de proyectos, sera de mayor cobertura. 
                            </p></center>
                            </div>
                         </div>
                   </div>
                </section>

             </div>
                 
             </section>
             <div id="main2" >
                 
            <section class="wrapper style1">
               <div class="inner">
                  <header class="align-center">
                        <h2>Nuestro equipo de trabajo</h2>
                    </header>
                </div>
            </section>
            
            <section class="wrapper style1">
               <div class="inner">
                  
                  <!-- 4 Column Video Section -->
                     <div class="flex flex-4">
                        <div class="video col">
                           <div class="image fit">
                              <img src="../../images/hugo.jpg" alt="" />
                           </div>
                           <p class="caption">
                           
                              <b>Diseño y Desarrollo</b>
                           
                        </p>
                        <center><p>Hugo Clavijo.
                        </p></center>
                           
                        </div>
                        <div class="video col">
                           <div class="image fit">
                              <img src="../../images/juancarlos.jpg" alt="" />
                           </div>
                           <p class="caption">
                           
                              <b>Diseño y Contenido</b>
                           </p>

                        <center><p>Juan Carlos Carrera
                        </p></center>
                        </div>
                        <div class="video col">
                           <div class="image fit">
                              <img src="../../images/david.jpg" alt="" />
                           </div>
                           <p class="caption">
                           
                              <b>Desarrollo y Contenido</b>
                           
                        </p>
                        <center><p>David Robelly.
                        </p></center>
                           
                        </div>
                        <div class="video col">
                           <div class="image fit">
                              <img src="../../images/carlos.jpg" alt="" />
                           </div>
                           <p class="caption">
                           
                              <b>Desarrollo</b>
                           </p>

                        <center><p>Carlos Monroy. 
                        </p></center>
                        </div>
                     </div>
               </div>
            </section>

         </div>
         <!-- Two -->
         

         
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
