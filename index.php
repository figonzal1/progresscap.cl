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

                        <!-- Tabs navs -->
                        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab" aria-controls="ex1-tabs-1" aria-selected="true">Cursos Programados</a>
                            </li>
                            <!--<li class="nav-item" role="presentation">
                                <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">Cursos Acceso Inmediato</a>
                            </li>-->
                        </ul>
                        <!-- Tabs navs -->

                        <!-- Tabs content -->
                        <div class="tab-content" id="ex1-content">
                            <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">

                                <div class="row g-4">
                                    <?php include_once("src/html/cursos/ra.html"); ?>

                                    <?php include_once("src/html/cursos/frenillo_lingual.html"); ?>

                                    <?php include_once("src/html/cursos/neonatal.html"); ?>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">

                                <!-- GRID SISTEM -->
                                <div class="row g-4">
                                </div>
                            </div>
                        </div>
                        <!-- Tabs content -->
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
        <?php include_once("src/html/common/footer.html"); ?>
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