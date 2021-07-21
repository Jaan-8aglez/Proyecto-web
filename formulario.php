<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo '
    <script> 
      alert("Por favor inicia sesion para ingresar a esta página");
      window.location = "login.html";
    </script>
    ';
    session_destroy();
    die();
}
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
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="images/logo-unam.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
                    aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="index.html">Inicio</a></li>
                        <li><a class="nav-link" href="sabermas.html">Saber más</a></li>
                        <li><a class="nav-link" href="cursos.php">Cursos</a></li>
                        <li><a class="nav-link" href="tramite.html">Inscripción</a></li>
						<li><a class="nav-link" href="contacto.html">Contacto</a></li>
						<li><a class="nav-link" href="login.html">Iniciar sesión</a></li>
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
                        <h3>Solicitud de Inscripción</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->

    <!-- section -->
    <div class="row">
        <div class="full center mt-4">
            <h4>86132000 Concepto: Servicios de Educación y Capacitación en Administración</h4>
        </div>
        <div class="full center">
            <h4>Centro de Cómputo N°. UR: 5130 </h4>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding contact_section" style="background:#f6f6f6;">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-8 col-md-8 col-sm-12">
				    <div class="full float-right_img">
                        <img src="images/img10.png" alt="#">
                    </div>
                 </div> -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <form action="contact.html">
                            <fieldset>
                                <h1>Datos del Curso</h1>

                                <div class="">
                                    <input type="text" placeholder=" Nombre del Curso" name="your name" style="border: 2px dotted #999"/>
                                </div>

                                <div class="full field">
                                    <select class="select" name="Periodo" >

                                        <option selected>Periodo / Fecha de Inicio</option>

                                        <option>2020-1</option>
                                        
                                        <option>2021-1</option>
                                        
                                        <option>2022-1</option>
                                        
                                        </select>
                                </div>

                                <div class="input-group">
                                    <input type="phn" placeholder="Grupo" name="Phone number" class="col-lg-6" style="border: 2px dotted #999" />
                                    <input type="phn" placeholder="Sala" name="Phone number" class="col-lg-6" style="border: 2px dotted #999" />
                                </div>

                                <div class="">
                                    <input type="text" placeholder=" Profesor" name="your name" style="border: 2px dotted #999"/>
                                </div>                                
                                
                                <div class="input-group">
                                    <input type="number" placeholder="Costo" name="Phone number" class="col-lg-6" style="border: 2px dotted #999" />
                                    <input type="text" placeholder="Horario" name="Phone number" class="col-lg-6" style="border: 2px dotted #999" />
                                </div>


                            </fieldset>
                            <fieldset>
                                <h1>Datos Personales</h1>

                                <div class="">
                                    <input type="text" placeholder=" Nombre Completo" name="your name" style="border: 2px dotted #999"/>
                                </div>
                                <div class="">
                                    <input type="email" placeholder=" Correo Electrónico" name="email" id="email" pattern=".+@hotmail.com" style="border: 2px dotted #999"/>
                                </div>
                                <div class="input-group">
                                    <input type="number" placeholder="Celular" name="Phone number" class="col-lg-6" style="border: 2px dotted #999" />
                                    <input type="number" placeholder="Telefono Casa" name="Phone number" class="col-lg-6" style="border: 2px dotted #999" />
                                </div>

                                <h4>Procedencia Fes Cuautitlán</h4>

                                <script type="text/javascript">

                                    function habilitar() {
                                        
                                        var rad = document.getElementById("radio1").value;
                                        var rad2 = document.getElementById("radio2").value;

                                        var selec = document.getElementById("slec").value;
                                        var selecc = document.getElementById("slecc").value;

                                        console.log(rad);
                                        console.log(rad2);
                                        console.log(selec);
                                        console.log(selecc);

                                        if (rad.value == false && rad2.value == true) {

                                            selec.disabled = false;
                                        
                                            return selec;
                                        } 
                                    }
                            </script>

                                <div class="input-group">
                                    <label class="col-lg-1" style="font-size: 21px;
                                    color: #07528d;
                                    margin-top: 10px;">Si</label>
                                    <input type="radio" placeholder="Celular" name="radio" id="radio1" value="false"  class="col-lg-1" style="width: 100%;
                                    margin: 15px 0;
                                    min-height: 30px;
                                    border: none;
                                    background: #fff;
                                    font-size: 17px;
                                    color: #676767;
                                    padding: 0px 25px; border: 2px dotted #999;" onclick="habilitar()" />
                                    <label class="col-lg-1" style="font-size: 21px;
                                    color: #07528d;
                                    margin-top: 10px;">No</label>
                                    <input type="radio" placeholder="Telefono Casa" name="radio" id="radio2" value="true" class="col-lg-1" style="width: 100%;
                                    margin: 15px 0;
                                    min-height: 30px;
                                    border: none;
                                    background: #fff;
                                    font-size: 17px;
                                    color: #676767;
                                    padding: 0px 25px; border: 2px dotted #999;" onclick="habilitar()" />
                                </div>


                                <div class="full field">
                                    <select id="slec" class="select" name="Periodo" >

                                        <option selected>Carrera (SOLO INTERNOS)</option>

                                        <option>Informatica</option>
                                        
                                        <option>Administración</option>
                                        
                                        <option>Contaduria</option>
                                        
                                        </select>
                                </div>

                                <div class="">
                                    <input type="number" id="slecc" placeholder="Numero de Cuenta (SOLO INTERNOS)" name="your name" style="border: 2px dotted #999" />
                                </div>

                                <div class="full field">
                                    <select class="select" name="Periodo" >

                                        <option selected>Grado Academico (SOLO EXTERNOS)</option>

                                        <option>Secundaria</option>

                                        <option>Preparatoria / Bachillerato</option>

                                        <option>Carrera Tecnica</option>
                                        
                                        <option>Licenciatura</option>

                                        <option>Maestria / Posgrado</option>
                                        
                                        </select>
                                </div>

                                <div class="full field">
                                    <div class="center"><button>ENVIAR</button></div>
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
                            <li><img src="images/i5.png" alt="#" /><a href="https://goo.gl/maps/RiEoGue7NJxYxpMN6"
                                    target="_blank"><span class="icon"></span><span>Centro de Cómputo primer piso, Campo
                                        Cuatro</span></a></li>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        /* counter js */

        (function ($) {
            $.fn.countTo = function (options) {
                options = options || {};

                return $(this).each(function () {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof (settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof (settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0,               // the number the element should start at
                to: 0,                 // the number the element should end at
                speed: 1000,           // how long it should take to count between the target numbers
                refreshInterval: 100,  // how often the element should be updated
                decimals: 0,           // the number of decimal places to show
                formatter: formatter,  // handler for formatting the value before rendering
                onUpdate: null,        // callback method for every time the element is updated
                onComplete: null       // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function ($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function (value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    </script>
</body>

</html>