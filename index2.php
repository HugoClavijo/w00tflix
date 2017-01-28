<!DOCTYPE HTML>

<html>
   <head>
      <title>W00tflix</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="assets/css/main.css" />
   </head>
   <body>

      <!-- Header -->
         <header id="header">
            <h1>W00tflix</h1>
            <a href="#menu">Menu</a>
         </header>

      <!-- Nav    -->
          <nav id="menu">
            <ul class="links">
               <li><a href="../index.php">Home</a></li>
               <li><a href="pages/quienes_somos/quienes_somos.php">Acerca de</a></li>
               <li><a href="pages/contactenos/contacto.php">Contactenos</a></li>
               <li><a href="pages/login/login.php">Login</a></li>
            </ul>
         </nav>
     

      <!-- Main -->
         <div id="main">

         <!-- One -->
            <section class="wrapper style1">
               <div class="inner">
                  <header class="align-center">
                     <h2>Bienvenido...</h2>
                     

                     <!--<form method="post" action="#">
                           <div class="row uniform">
                              <div class="9u 12u$(small)">
                                 <input type="text" name="query" id="query" value="" onkeyup="showResult(this.value)" value="Busqueda..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Busqueda...';}"/>
                              </div>
                              <div class="3u$ 12u$(small)">
                                 <input type="submit" value="Search" class="fit" />
                              </div>
                           </div>
                        </form>-->

                <form>
					<input type="text" size="30" onkeyup="showResult(this.value)" value="Busqueda..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Busqueda...';}">
					<div id="livesearch"></div>
					</form>
					
					
                  </header>
                  <!-- 2 Column Video Section -->
                     <div class="flex flex-2">
                        <div class="video col">
                           <div class="image fit">
                              <img src="images/pic07.jpg" alt="" />
                              <div class="arrow">
                                 <div class="icon fa-play"></div>
                              </div>
                           </div>
                           
                           <a href="generic.html" class="link"><span>Click Me</span></a>
                        </div>
                        <div class="video col">
                           <div class="image fit">
                              <img src="images/pic08.jpg" alt="" />
                              <div class="arrow">
                                 <div class="icon fa-play"></div>
                              </div>
                           </div>
                           
                           <a href="generic.html" class="link"><span>Click Me</span></a>
                        </div>
                     </div>
               </div>
            </section>

         <!-- Two -->
            <section class="wrapper style2">
               <div class="inner">
                  <header>
                     <h2>Escoge tu canal</h2>
                     <p>aqui podrasa seleccionar el canal de tu artista favorito.</p>
                  </header>
                  <!-- Tabbed Video Section -->
                     <div class="flex flex-tabs">
                        <ul class="tab-list">
                           <li><a href="#" data-tab="tab-1" class="active">Arte/Cultura/Eventos</a></li>
                           <li><a href="#" data-tab="tab-2">Musica/Composicion/Interpretacion</a></li>
                           <li><a href="#" data-tab="tab-3">Pintores/Escultores/Artesanos</a></li>
                        </ul>
                        <div class="tabs">

                           <!-- Tab 1 -->
                              <div class="tab tab-1 flex flex-3 active">
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic01.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic02.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic03.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic04.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic05.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic06.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                              </div>

                           <!-- Tab 2 -->
                              <div class="tab tab-2 flex flex-3">
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic06.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic05.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic04.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic03.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic02.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic01.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                              </div>

                           <!-- Tab 3 -->
                              <div class="tab tab-3 flex flex-3">
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic03.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic02.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic01.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic06.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic05.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                                 <!-- Video Thumbnail -->
                                    <div class="video col">
                                       <div class="image fit">
                                          <img src="images/pic04.jpg" alt="" />
                                          <div class="arrow">
                                             <div class="icon fa-play"></div>
                                          </div>
                                       </div>
                                       <a href="generic.html" class="link"><span>Click Me</span></a>
                                    </div>
                              </div>

                        </div>
                     </div>
               </div>
            </section>

         <!-- Three -->
            <section class="wrapper ">
               <div class="inner">
                  <header class="align-center">
                     <h2>Los mas vistos</h2>
                     <p>Te mostramos a los 3 artistas mas vistos en la ultima semana.</p>
                  </header>

                  <!-- 3 Column Video Section -->
                     <div class="flex flex-3">
                        <div class="video col">
                           <div class="image fit">
                              <img src="images/pic09.jpg" alt="" />
                              <div class="arrow">
                                 <div class="icon fa-play"></div>
                              </div>
                           </div>
                           <p class="caption">
                              El Evento mas seguido 
                           </p>
                           <a href="generic.html" class="link"><span>Click Me</span></a>
                        </div>
                        <div class="video col">
                           <div class="image fit">
                              <img src="images/pic10.jpg" alt="" />
                              <div class="arrow">
                                 <div class="icon fa-play"></div>
                              </div>
                           </div>
                           <p class="caption">
                              lo mejor en musica nacional
                           </p>
                           <a href="generic.html" class="link"><span>Click Me</span></a>
                        </div>
                        <div class="video col">
                           <div class="image fit">
                              <img src="images/pic11.jpg" alt="" />
                              <div class="arrow">
                                 <div class="icon fa-play"></d Pliv>
                              </div>
                           </div>
                           <p class="caption">
                              Arte Plastico
                           </p>
                           <a href="generic.html" class="link"><span>Click Me</span></a>
                        </div>
                     </div>
               </div>            </section>

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
               &copy; W00tflix. Design: <a href="">Hugo Clavijo</a>. Images: <a href="">Juan Carlos Carrera</a>. Video: <a href="">Carlos Monroy</a>.
            </div>
         </footer>

      <!-- Scripts -->
         <script src="assets/js/jquery.min.js"></script>
         <script src="assets/js/jquery.scrolly.min.js"></script>
         <script src="assets/js/skel.min.js"></script>
         <script src="assets/js/util.js"></script>
         <script src="assets/js/main.js"></script>
         <script type="text/javascript" src="assets/js/livesearch.js"></script><!--Pilas.................. -->
   </body>
</html>