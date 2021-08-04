<?php
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Permissions-Policy: fullscreen=(), geolocation=(), camera=(), microphone=()");
header("Content-Security-Policy:frame-ancestors 'none'; default-src 'self';img-src 'self' data:;style-src 'self' 'unsafe-inline';script-src 'self' 'sha256-ajGjo5eD0JzFPdnpuutKT6Sb5gLu+Q9ru594rwJogGQ=' 'sha256-vvt4KWwuNr51XfE5m+hzeNEGhiOfZzG97ccfqGsPwvE=' 'sha256-Mrs88g1byVkLHsPw+1FUhrKsHB9Qh7nyDJ7afahdX9s=' 'sha256-eGG8qgSAZWp6J3WOiPYNCznSvv4IDhyKZs5w6fwksLs=' https://maps.googleapis.com ;frame-src https://www.google.com ");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Capacitaciones Progress</title>
    <meta name="description" content="Capacitaciones progress"/>
    <link rel="canonical" href="https://www.progresscap.cl/"/>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="manifest" href="/img/site.webmanifest">
    <link rel="mask-icon" href="/img/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/img/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/img/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

<!-- Header -->
<header id="header" class="transparent-nav">
    <div class="container">

        <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-brand">
                <a class="logo" href="https://www.progresscap.cl/">
                    <img src="img/logo_icono.png" alt="logo">
                </a>
            </div>
            <!-- /Logo -->

            <!-- Mobile toggle -->
            <button class="navbar-toggle">
                <span></span>
            </button>
            <!-- /Mobile toggle -->
        </div>

        <!-- Navigation -->
        <nav id="nav">

            <ul class="main-menu nav navbar-nav navbar-left">
                <li><a href="https://www.progresscap.cl/">Inicio</a></li>
                <li><a href="https://www.progresscap.cl/#acerca">Acerca</a></li>
                <li><a href="https://www.progresscap.cl/#cursos">Cursos</a></li>
                <li><a href="https://www.progresscap.cl/#contacto">Contacto</a></li>
            </ul>

            <ul class="main-menu nav navbar-nav navbar-right">
                <li><a href="https://moodle.progresscap.cl/" target="_blank" rel="noopener">Moodle</a></li>
            </ul>

        </nav>


        <!-- /Navigation -->

    </div>
</header>
<!-- /Header -->

<!-- Home -->
<section id="inicio">
    <div id="home" class="hero-area">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(img/home-background.jpg)"></div>
        <!-- /Backgound Image -->

        <div class="home-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="white-text">Capacitaciones Progress</h1>
                        <p class="lead white-text">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant, eu
                            pro alii error homero. (Cambiar texto)</p>
                        <a class="main-button icon-button" href="#">¡Bienvenido!</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- /Home -->

<!-- About -->
<section id="acerca">
    <div id="about" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row" style="margin-top: 80px;">

                <div class="col-md-6">
                    <div class="section-header">
                        <h2>Bienvenido a Progress</h2>
                        <p class="lead">(Cambiar texto) Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.
                        </p>
                    </div>

                    <!-- feature -->
                    <div class="feature">
                        <i class="feature-icon fa fa-flask"></i>
                        <div class="feature-content">
                            <h4>Cursos Online </h4>
                            <p>(Cambiar texto) Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas
                                veniam nominati.</p>
                        </div>
                    </div>
                    <!-- /feature -->

                    <!-- feature -->
                    <div class="feature">
                        <i class="feature-icon fa fa-users"></i>
                        <div class="feature-content">
                            <h4>Profesores Expertos</h4>
                            <p>(Cambiar texto) Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas
                                veniam nominati.</p>
                        </div>
                    </div>
                    <!-- /feature -->

                    <!-- feature -->
                    <div class="feature">
                        <i class="feature-icon fa fa-comments"></i>
                        <div class="feature-content">
                            <h4>Comunidad</h4>
                            <p>(Cambiar texto) Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas
                                veniam nominati.</p>
                        </div>
                    </div>
                    <!-- /feature -->

                </div>

                <div class="col-md-6">
                    <div class="about-img">
                        <img src="img/logo_completo.png" alt="">
                    </div>
                </div>

            </div>
            <!-- row -->

        </div>
        <!-- container -->
    </div>
</section>
<!-- /About -->

<!-- Courses -->
<section id="cursos">
    <div id="courses" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row" style="margin-top: 80px;">
                <div class="section-header text-center">
                    <h2>Explora nuestros cursos</h2>
                    <p class="lead">(Cambiar texto) Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
                </div>
            </div>
            <!-- /row -->

            <!-- courses -->
            <div id="courses-wrapper" class="mb-4">

                <!-- row -->
                <div class="row">

                    <!-- single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <div class="course-img">
                                <img src="./img/tea.png" alt="">
                                <i class="course-link-icon fa fa-link"></i>
                            </div>
                            <a class="course-title" href="#">Estrategias educativas para el alumno con TEA</a>
                            <div class="course-details">
                                <span class="course-category">Curso sincrónico online</span>
                                <span class="course-price course-free">$(precio)</span>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                    <!-- single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <a href="#" class="course-img">
                                <img src="./img/alergia_alimentaria.png" alt="">
                                <i class="course-link-icon fa fa-link"></i>
                            </a>
                            <a class="course-title" href="#">Alergias alimentarias</a>
                            <div class="course-details">
                                <span class="course-category">Curso asincrónico online</span>
                                <span class="course-price course-free">$(precio)</span>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                    <!-- single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <a href="#" class="course-img">
                                <img src="./img/apraxia_infantil.png" alt="">
                                <i class="course-link-icon fa fa-link"></i>
                            </a>
                            <a class="course-title" href="#">Apraxia del habla infantil</a>
                            <div class="course-details">
                                <span class="course-category">Curso sincrónico online</span>
                                <span class="course-price course-free">$(precio)</span>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->


                    <!-- /single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <a href="#" class="course-img">
                                <img src="./img/interaccion_digital.png" alt="">
                                <i class="course-link-icon fa fa-link"></i>
                            </a>
                            <a class="course-title" href="#">Estrategias prácticas para la interacción digital</a>
                            <div class="course-details">
                                <span class="course-category">Curso sincrónico online</span>
                                <span class="course-price course-free">$(precio)</span>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                    <!-- /single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <a href="#" class="course-img">
                                <img src="./img/anatomofisiologia.png" alt="">
                                <i class="course-link-icon fa fa-link"></i>
                            </a>
                            <a class="course-title" href="#">Anatomofisiología de la articulación</a>
                            <div class="course-details">
                                <span class="course-category">Curso sincrónico online</span>
                                <span class="course-price course-free">$(precio)</span>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                </div>
                <!-- /row -->

            </div>
            <!-- /courses -->

            <!--<div class="row" style="margin-bottom: 80px;">
                <div class="center-btn">
                    <a class="main-button icon-button" href="#">Más cursos</a>
                </div>
            </div>-->

        </div>
        <!-- container -->

    </div>
</section>
<!-- /Courses -->

<!-- Call To Action -->
<div id="cta" class="section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta1-background.jpg)"></div>
    <!-- /Backgound Image -->

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row" style="margin-top: 80px;margin-bottom: 80px;">

            <div class="col-md-6">
                <h2 class="white-text">(Cambiar text) Ceteros fuisset mei no, soleat epicurei adipiscing ne vis.
                </h2>
                <p class="lead white-text">(Cambiar texto) Ceteros fuisset mei no, soleat epicurei adipiscing ne
                    vis. Et his suas
                    veniam nominati.</p>
                <a class="main-button icon-button" href="#">¡Comienza!</a>
            </div>

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Call To Action -->

<!-- Why us -->
<div id="why-us" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row" style="margin-top: 80px;margin-bottom: 80px;">
            <div class="section-header text-center">
                <h2>¿Por qué progress?</h2>
                <p class="lead">(Cambiar texto) Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
            </div>

            <!-- feature -->
            <div class="col-md-4">
                <div class="feature">
                    <i class="feature-icon fa fa-flask"></i>
                    <div class="feature-content">
                        <h4>Cursos Online</h4>
                        <p>(Cambiar texto) Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas
                            veniam nominati.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /feature -->

            <!-- feature -->
            <div class="col-md-4">
                <div class="feature">
                    <i class="feature-icon fa fa-users"></i>
                    <div class="feature-content">
                        <h4>Profesores Expertos</h4>
                        <p>(Cambiar texto) Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas
                            veniam nominati.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /feature -->

            <!-- feature -->
            <div class="col-md-4">
                <div class="feature">
                    <i class="feature-icon fa fa-comments"></i>
                    <div class="feature-content">
                        <h4>Comunidad</h4>
                        <p>(Cambiar texto) Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas
                            veniam nominati.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /feature -->

        </div>
        <!-- /row -->
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Why us -->

<!-- Contact CTA -->
<!--
<div id="contact-cta" class="section">
    <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2 text-center">
                <h2 class="white-text">Contact Us</h2>
                <p class="lead white-text">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
                <a class="main-button icon-button" href="#">Contact Us Now</a>
            </div>

        </div>

    </div>

</div>-->

<!-- Footer -->
<footer id="footer" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div id="bottom-footer" class="row">

            <!-- contact information -->
            <div class="col-md-6">
                <h4>Información de contacto</h4>
                <ul class="contact-details">
                    <li><i class="fa fa-envelope"></i>email@email.com</li>
                    <li><i class="fa fa-phone"></i>numero telefono</li>
                    <li><i class="fa fa-map-marker"></i>direccion</li>
                </ul>

            </div>

            <!-- footer nav -->
            <div class="col-md-6">
                <ul class="footer-nav">
                    <li><a href="https://www.progresscap.cl/">Inicio</a></li>
                    <li><a href="https://www.progresscap.cl/#acerca">Acerca</a></li>
                    <li><a href="https://www.progresscap.cl/#cursos">Cursos</a></li>
                    <li><a href="https://www.progresscap.cl/#contacto">Contacto</a></li>
                </ul>
            </div>

        </div>

        <!-- copyright -->
        <div class="col-md-9" style="margin-top: 40px;margin-bottom: 40px;">
            <div class="footer-copyright">
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear().toString());
                </script>
                Capacitaciones Progress
                <span>
						<p>Esta plantilla está hecha con
							<i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="https://colorlib.com"
                                                                                    target="_blank" rel="noopener">Colorlib</a>
							y adaptada por <a href="https://figonzal.cl" target="_blank"
                                              rel="noopener"><b>figonzal.cl</b></a>
						</p>
					</span>

            </div>
        </div>
        <!-- /copyright -->

        <!-- social -->
        <div class="col-md-3" style="margin-top: 40px;margin-bottom: 60px;">
            <ul class="footer-social">
                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
        <!-- /social -->

    </div>
    <!-- /container -->

</footer>
<!-- /Footer -->

<!-- preloader -->
<div id='preloader'>
    <div class='preloader'></div>
</div>
<!-- /preloader -->


<!-- jQuery Plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>

</html>