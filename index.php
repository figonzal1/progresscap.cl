<?php
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Content-Security-Policy: default-src 'self' https://*.google.com/ ;img-src 'self' http://*.bluehosting.cl data:;frame-src 'self' https://*.google.com/ https://www.mercadopago.cl  ;font-src 'self' https://cdnjs.cloudflare.com/ https://fonts.googleapis.com ;script-src 'self' 'unsafe-inline' https://ajax.googleapis.com https://www.mercadopago.cl ;style-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com/");
header("Permissions-Policy: fullscreen=(), geolocation=(), camera=(), microphone=()");
header('Accept-Encoding: gzip, compress, br');
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once("src/html/common/header.html") ?>

<body>

    <header>
        <?php require_once("src/html/common/nav.html") ?>
    </header>


    <main id="inicio">

        <?php require_once("src/html/common/carousel.html") ?>

        <section id="acerca">

            <div class="container mt-5 pt-5">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h3 class="h1">Bienvenido a Progress</h3>

                        <h3 class="mt-5 fw-bold">Quienes Somos</h3>
                        <p class="text-muted mb-5 lead">Somos un <span class="fw-bold">Organismo Técnico de Capacitación</span> (OTEC) enfocado en el desarrollo profesional, principalmente en áreas de salud y educación.</p>

                        <div class="d-flex justify-content-start align-items-start align-self-stretch mb-4">

                            <div class="icon-background-lg d-flex justify-content-center align-items-center flex-shrink-0">
                                <em class="fas fa-chalkboard-teacher fa-2x icon"></em>
                            </div>

                            <div class="ms-4 flex-grow-1">
                                <h4 class="h4 mb-3 fw-bold">Cursos Online</h4>
                                <p class="text-muted lead">Cursos en modalidad online sincrónica o asincrónica.</p>
                            </div>

                        </div>

                        <div class="d-flex justify-content-start align-items-start align-self-stretch mb-4">

                            <div class="icon-background-lg d-flex justify-content-center align-items-center flex-shrink-0">
                                <em class="fas fa-award fa-2x icon"></em>
                            </div>

                            <div class="ms-4 flex-grow-1">
                                <h4 class="h4 mb-3 fw-bold">Cursos certificados</h4>
                                <p class="text-muted lead">Nuestros cursos cuentan con certificación NCH2728, SENCE.</p>
                            </div>

                        </div>

                        <div class="d-flex justify-content-start align-items-start align-self-stretch mb-4">

                            <div class="icon-background-lg d-flex justify-content-center align-items-center flex-shrink-0">
                                <em class="fas fa-stopwatch fa-2x icon"></em>
                            </div>

                            <div class="ms-4 flex-grow-1">
                                <h4 class="h4 mb-3 fw-bold">Horas de formación</h4>
                                <p class="text-muted lead">Más de 50 horas de formación académica en cada uno de nuestros
                                    cursos.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <picture>

                            <source srcset="img/progress_logo_completo-min.webp" type="image/webp">
                            <source srcset="img/progress_logo_completo-min.jpg" type="image/jpg">
                            <img class="img-fluid" src="/img/progress_logo_completo-min.jpg" alt="ProgressCap Logo" loading="lazy">
                        </picture>
                    </div>
                </div>

            </div>
        </section>

        <section id="cursos">

            <div class="container my-5 py-5">

                <div class="row">
                    <div class="col-md-12 mb-5">
                        <div class="text-center">
                            <h3 class="h1">Explora nuestros cursos</h3>
                            <p class="h5 text-muted lead">Ofrecemos cursos tanto para profesionales del área de salud como
                                para profesionales del área de la educación</p>
                        </div>
                    </div>

                    <div class="col-md-12">

                        <!-- GRID SISTEM -->
                        <div class="row g-4">

                            <?php include_once("src/html/cursos/fono_pie.html"); ?>

                            <?php include_once("src/html/cursos/porteo_ergonomico.html"); ?>

                            <?php include_once("src/html/cursos/capsulas.html"); ?>

                            <?php include_once("src/html/cursos/neonatal.html"); ?>

                            <?php include_once("src/html/cursos/ra.html"); ?>

                            <?php include_once("src/html/cursos/blw.html"); ?>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="certificados">
            <div class="container-fluid mt-5 py-5 certificados">
                <div class="row text-center">
                    <h1 class="h2 mb-5">Certifica</h1>
                    <div class="d-flex justify-content-center align-items-center">

                        <div class="row gy-4">
                            <div class="col-md-6 col-sm-12">
                                <!--suppress CheckImageSize -->
                                <img src="img/iCONTEC.png" class="img-responsive rounded mx-5" style="width: 30%;" alt="IconTec">
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <!--suppress CheckImageSize -->
                                <img src="img/otec_sence.jpg" class="img-responsive rounded mx-5" style="width: 30%;" alt="SENCE Otec">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <footer class="mt-5 pt-5">

        <section id="contacto">

            <div class="container">
                <div class="row mt-5 mb-4 p-4">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <h5 class="h5 fw-normal mb-3 text-uppercase">Contacto</h5>
                        <hr class="hr-light mb-lg-5 mb-4">

                        <div class="contacto">
                            <div class="row">
                                <div class="d-flex justify-content-start align-items-center mb-2">

                                    <div class="icon-background-md d-flex justify-content-center align-items-center flex-shrink-0">
                                        <em class="fas fa-map-marker-alt icon"></em>
                                    </div>

                                    <div class="ms-3 flex-grow-1">
                                        <p class="text-muted m-0 ">Las Rojas Poniente #1489, La Serena, Chile.</p>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="d-flex justify-content-start align-items-center mb-2">

                                    <div class="icon-background-md d-flex justify-content-center align-items-center flex-shrink-0">
                                        <a href="https://api.whatsapp.com/send?phone=56956876165" target="_blank" rel="noopener noreferrer nofollow"><em class="fas fa-phone-alt icon"></em></a>
                                    </div>

                                    <div class="ms-3 flex-grow-1">
                                        <p class="text-muted m-0 "><a href="https://api.whatsapp.com/send?phone=56956876165" target="_blank" rel="noopener noreferrer nofollow">+569 5687 6165</a></p>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="d-flex justify-content-start align-items-center mb-2">

                                    <div class="icon-background-md d-flex justify-content-center align-items-center flex-shrink-0">
                                        <p class="text-muted m-0 "><a href="mailto:capacitaciones.progress@gmail.com"><em class="fas fa-envelope icon"></em></a></p>
                                    </div>

                                    <div class="ms-3 flex-grow-1">
                                        <p class="text-muted m-0 "><a href="mailto:capacitaciones.progress@gmail.com">capacitaciones.progress@gmail.com</a></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- LINKS -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <h5 class="h5 fw-normal mb-3 text-uppercase">Links</h5>
                        <hr class="hr-light mb-lg-5 mb-4">

                        <div class="links">
                            <div class="row">
                                <div class="col-1 text-center">
                                    <em class="fas fa-arrow-right"></em>
                                </div>
                                <div class="col-11 "><a href="https://www.progresscap.cl/#inicio">Inicio</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1 text-center">
                                    <em class="fas fa-arrow-right"></em>
                                </div>
                                <div class="col-11 "><a href="https://www.progresscap.cl/#acerca">Acerca</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1 text-center">
                                    <em class="fas fa-arrow-right"></em>
                                </div>
                                <div class="col-11 "><a href="https://www.progresscap.cl/#cursos">Cursos</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1 text-center">
                                    <em class="fas fa-arrow-right"></em>
                                </div>
                                <div class="col-11 "><a href="https://www.progresscap.cl/#contacto">Contacto</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- REDES SOCIALES -->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <h5 class="h5 fw-normal mb-3 text-uppercase d-none d-lg-block">Redes
                            Sociales</h5>
                        <hr class="hr-light mb-lg-5 mb-4 d-none d-lg-block">

                        <div class="d-flex justify-content-lg-start justify-content-xl-start justify-content-center justify-content-xs-center align-items-center">

                            <!-- IG -->
                            <a class="btn btn-floating btn-lg m-1 text-white shadow-1-strong" href="https://www.instagram.com/cap.progress" rel="noopener noreferrer nofollow" role="button" style="background-color: #E1306C" target="_blank"><em class="fab fa-instagram fa-lg"></em></a>

                            <!-- Youtube -->
                            <a class="btn btn-floating btn-lg m-1 text-white shadow-1-strong" href="https://www.youtube.com/@progresscap" rel="noopener noreferrer nofollow" role="button" style="background-color: #E1306C" target="_blank"><em class="fab fa-youtube fa-lg"></em></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="text-center p-4 copyright text-white">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script async>
                    document.write(new Date().getFullYear().toString());
                </script>
                López & Eguiluz LTDA<br />
                INN: A-9854 <br />
                <p class="my-0">
                    Diseñado por
                    <a class="fw-bold" href="https://www.figonzal.cl" rel="noopener noreferrer nofollow" target="_blank">figonzal.cl</a>
                    &
                    <a target="_blank" href="http://panel.bluehosting.host/aff.php?aff=3660">Hosteado</a>
                    por
                    <a target="_blank" class="fw-bold" href="http://panel.bluehosting.host/aff.php?aff=3660">BlueHosting</a>
                </p>
            </div>
        </section>
    </footer>


    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js" async></script>
    <script type="text/javascript" async>
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 800);
        });
    </script>

    <script src="js/modernizr-custom.js"></script>
    <script>
        Modernizr.on('webp', function(result) {
            if (result) {
                // supported
            } else {
                // not-supported
            }
        });
    </script>
</body>

</html>