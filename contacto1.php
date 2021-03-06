<?php
// Mandamos llamar nuestra BD
include 'conexion.php';
include_once ("validar_sesion.php");

?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Centro de Tecnologías en Cómputo y Comunicación</title>
	<link rel="shortcut icon" href="images/unam-icon.png">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loa2.gif" alt="#" />
        </div>
    </div>
    <!-- END LOADER -->

     <!-- Start header -->
	 <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="images/logo-unam.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="sabermas1.php">Saber más</a></li>
                        <li><a class="nav-link" href="cursos1.php">Cursos</a></li>
                        <li><a class="nav-link" href="tramite1.php">Inscripción</a></li>
						<li><a class="nav-link" href="contacto1.php">Contacto</a></li>
						<li><a class="nav-link" href="cerrar_sesion.php">Cerrar Sesion</a></li>
                    </ul>
                </div>
                <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Buscar">
					<a class="">
                        <span class="fa fa-search" style="font-size: 20px; margin-top: 15px;" styaria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

	<!-- section -->
	
	<section class="inner_banner">
	  <div class="container">
	      <div class="row">
		      <div class="col-12">
			    <div class="full">
                        <div class="heading_main text_align_center">

                        </div>
					  </div>
			  </div>
		  </div>
	  </div>
	</section>
	
	<!-- end section -->
   
	<!-- section -->
	 <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>Contacto</span></h2>
                        </div>
					  </div>
                </div>
			  </div>
           </div>
        </div>
    <div class="section layout_padding contact_section" style="background:#f6f6f6;">
        <div class="container">
               <div class="row">
                 <div class="col-lg-8 col-md-8 col-sm-12">
				    <div class="full float-right_img">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3158.7931566807515!2d-99.19023067771441!3d19.69306049107807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f55f752d8035%3A0x18d253a85bb8bf58!2sFESC%20Campo%204%20Acceso%202!5e0!3m2!1ses-419!2smx!4v1625883056010!5m2!1ses-419!2smx" width="750" height="555" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                 </div>
				 <div class="col-lg-4 col-md-4 col-sm-12">
				    <div class="contact_form">
					    <form action="contact.html">
						
						   <fieldset style ="background-color:#002147; width: 110%; padding: 25% 7% 50%; color: white;">
						   	    <div class="full field" >
							    <li><img src="images/i5.png" alt="#" ><a href="https://goo.gl/maps/RiEoGue7NJxYxpMN6" target="_blank" style="color: white;"><span class="icon"></span><span>    Centro de Cómputo, primer piso , Campo Cuatro, Carretera Cuautitlán-Teoloyucan Km. 2.5, Col. San Sebastián Xhala, Cuautitlán Izcalli, Estado de México, CP. 54714</span></a></li>
								<br>
								<br>
								<li><img src="images/i6.png">cursos.computo@cuautitlan.unam.mx</li>
								<br>
								<br>
								<li><img src="images/i7.png"><span>56-23-18-79</span></li>
							   </div>
							
						   </fieldset>
						</form>
					</div>
                 </div>
               </div>			  
           </div>
        </div>
	<!-- end section -->
    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
		
		   <div class="row">
		   
		      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			     <div class="footer_blog">
				    <h3>Aviso de Privacidad</h3>
					 <div class="full white_fonts">
					    <p>
							Esta página puede ser reproducida con fines no lucrativos, 
							siempre y cuando no se mutile, se cite la fuente completa 
							y su dirección electrónica. De otra forma requiere permiso previo 
							por escrito de la institución. </p>
					 </div>
				 </div>
			  </div>
			  
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			       <div class="footer_blog footer_menu white_fonts">
						    <h3>Menú Rapido</h3>
						    <ul> 
								<li><a href="#">> Cursos</a></li>
								<li><a href="#">> Temarios</a></li>
								<li><a href="#">> Tramites</a></li>
								<li><a href="#">> Eventos</a></li>
								<li><a href="contact.html">> Contacto</a></li>
							</ul>
						 </div>
				 </div>
				 
				 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
					<h3>Noticias</h3>
					<p>Suscríbete para recibir noticias de nuevos cursos de programación</p>
							 <div class="newsletter_form">
							    <form action="index.html">
								   <input type="email" placeholder="Tu correo electrónico" name="#" required />
								   <button>ENVIAR</button>
								</form>
							 </div>
						 </div>
					</div>	 
			  
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Contacto</h3>
							 <ul class="full">
								<li><img src="images/i5.png" alt="#" /><a href="https://goo.gl/maps/RiEoGue7NJxYxpMN6" target="_blank"><span class="icon"></span><span>Centro de Cómputo primer piso, Campo Cuatro</span></a></li>
								<li><img src="images/i6.png"><span>cursos.computo@cuautitlan.unam.mx</span></li>
								<li><img src="images/i7.png"><span>56-23-18-79</span></li>
							 </ul>
						 </div>
					</div>	 
			  
		   </div>
		
        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights Facultad de Estudios Superiores Cuautitlán 2021.</p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
	
</body>

</html>