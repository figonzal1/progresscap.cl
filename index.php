<?php
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Content-Security-Policy: default-src 'self' https://*.google.com/ ;img-src 'self' data:;frame-src 'self' https://*.google.com/  ;font-src 'self' https://use.fontawesome.com https://fonts.googleapis.com ;script-src 'self' 'unsafe-inline' https://ajax.googleapis.com ;style-src 'self' 'unsafe-inline' https://fonts.googleapis.com/ https://use.fontawesome.com/");
header("Permissions-Policy: fullscreen=(), geolocation=(), camera=(), microphone=()");
header('Accept-Encoding: gzip, compress, br');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>

    <title>Capacitaciones Progress</title>
    <meta name="description" content="Capacitaciones progress"/>
    <!-- BING -->
    <meta name="msvalidate.01" content="2A85F96AE86AC763C3A8DA5D21CE03B2"/>
    <link rel="canonical" href="https://www.progresscap.cl/"/>

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

    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" rel="preload stylesheet" as="style"
          type="text/css" crossorigin/>

    <!-- Google Fonts Roboto -->
    <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
            rel="preload"
            as="font"
            crossorigin
    />

    <!-- CUSTOM MDB -->
    <link rel="preload stylesheet" href="src/scss/mdb.free.min.css" as="style" type="text/css" crossorigin>

    <style>

        .dark-bg {
            background: linear-gradient(
                    180deg,
                    rgba(73, 119, 159, 0.9),
                    rgba(255, 177, 0, 0.8) 100%
            );
        }

        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
            height: 100vh;
        }

        .webp {
            background-image: url('img/background2-min.webp');
        }

        .no-webp {
            background-image: url('img/background2-min.jpg');
        }

    </style>
</head>
<body>

<header>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-default">
        <div class="container">
            <a class="navbar-brand" href="https://www.progresscap.cl">

                <picture>

                    <source srcset="img/progress_logo_completo-min.webp" type="image/webp">
                    <source srcset="img/progress_logo_completo-min.jpg" type="image/jpeg">
                    <!--suppress CheckImageSize -->
                    <img src="img/progress_logo_completo-min.jpg" height="60" alt="Progress Cap Logo" loading="lazy">
                </picture>


            </a>
            <button
                    aria-controls="navbarNavAltMarkup"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                    class="navbar-toggler"
                    data-mdb-target="#navbarNavAltMarkup"
                    data-mdb-toggle="collapse"
                    type="button"
            >
                <i class="fas fa-bars"></i>
            </button>

            <!-- RIGH MENU -->
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav navbar-nav-scroll">
                    <a href="https://www.progresscap.cl/#inicio" aria-current="page" class="nav-link active">Inicio</a>
                    <a href="https://www.progresscap.cl/#acerca" aria-current="page" class="nav-link">Acerca</a>
                    <div class="dropdown">
                        <a href="https://www.progresscap.cl/#cursos"
                           role="button"
                           id="dropdownMenuLink"
                           data-mdb-toggle="dropdown"
                           aria-expanded="false"
                           class="nav-link dropdown-toggle">Cursos</a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="https://www.progresscap.cl/#cursos">Método BLW y
                                    BLISS</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://www.progresscap.cl/#cursos">Rechazo alimentario
                                    IV</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://www.progresscap.cl/#cursos">Trastorno del
                                    Espectro Autista</a>
                            </li>

                        </ul>
                    </div>

                    <a href="https://www.progresscap.cl/#contacto" aria-current="page" class="nav-link">Contacto</a>
                </div>

                <!-- Left Icons -->
                <div class="navbar-nav d-flex flex-row ms-auto">
                    <a href="https://www.moodle.progresscap.cl" rel="noopener noreferrer" target="_blank"
                       class="nav-link px-0">Moodle</a>
                    <a class="nav-link px-0 ms-3" href="https://www.instagram.com/cap.progress/"
                       rel="noopener noreferrer" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                </div>
            </div>

        </div>

    </nav>
</header>


<main id="inicio">

    <!-- Background Image -->
    <!-- Carrousel -->
    <div class="carousel slide shadow-2-strong webp" data-mdb-ride="carousel" id="introCarousel">

        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li class="active" data-mdb-slide-to="0" data-mdb-target="#introCarousel"></li>
            <li data-mdb-slide-to="1" data-mdb-target="#introCarousel"></li>
            <li data-mdb-slide-to="2" data-mdb-target="#introCarousel"></li>
        </ol>

        <!-- Imagenes -->
        <div class="carousel-inner">

            <div class="carousel-item active" data-mdb-interval="15000">
                <div class="mask dark-bg w-100">

                    <div class="d-flex justify-content-center align-items-center h-100">

                        <div class="col-md-7 col-sm-12">
                            <div class="d-row text-center text-white px-5">
                                <h2 class="h1">Trastorno del Espectro Autista</h2>
                                <div class="mx-5 mb-4">
                                    <p class="px-5 pt-3 lead d-none d-sm-block">Curso online, que tiene como objetivo:
                                        comprender, actualizar conocimiento,
                                        conocer nuevas formas de intervención y aprender a evaluar y elaborar informes
                                        de evaluación y seguimiento.</p>
                                </div>
                                <a class="btn btn-lg btn-secondary mt-auto" href="https://www.progresscap.cl/#cursos">Ver
                                    curso</a>

                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 d-none d-md-block">

                            <picture>
                                <source srcset="img/cursos/autista-min.png" type="image/png">
                                <source srcset="img/cursos/autista-min.webp" type="image/webp">

                                <!--suppress CheckImageSize -->
                                <img src="img/cursos/autista-min.png"
                                     class="img-responsive rounded shadow-5-strong"
                                     height="650"
                                     loading="lazy"
                                     alt="Trastorno del Espectro Autista">
                            </picture>

                        </div>


                    </div>

                </div>
            </div>

            <div class="carousel-item" data-mdb-interval="15000">
                <div class="mask dark-bg w-100">

                    <div class="d-flex justify-content-center align-items-center h-100">

                        <div class="col-md-7 col-sm-12">
                            <div class="d-row text-center text-white px-5">
                                <h2 class="h1">Rechazo Alimentario IV</h2>
                                <div class="mx-5 mb-4">
                                    <p class="px-5 pt-3 lead d-none d-sm-block">
                                        Curso online, dictado por profesionales de la salud y orientado a profesionales
                                        de la salud que se desempeñen en el área pediátrica. O estudiantes de carreras
                                        del área de salud.
                                    </p>
                                </div>
                                <a class="btn btn-lg btn-secondary mt-auto" href="https://www.progresscap.cl/#cursos">Ver
                                    curso</a>

                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 d-none d-md-block">

                            <picture>
                                <source srcset="img/cursos/rechazo_iv-min.png" type="image/png">
                                <source srcset="img/cursos/rechazo_iv-min.webp" type="image/webp">

                                <!--suppress CheckImageSize -->
                                <img src="img/cursos/rechazo_iv-min.png"
                                     class="img-responsive rounded shadow-5-strong"
                                     height="650"
                                     loading="lazy"
                                     alt="Rechazo Alimentario IV">
                            </picture>

                        </div>


                    </div>

                </div>
            </div>

            <div class="carousel-item" data-mdb-interval="15000">
                <div class="mask dark-bg w-100">

                    <div class=" d-flex justify-content-center align-items-center h-100">

                        <div class="col-md-7 col-sm-12">
                            <div class="d-row text-center text-white px-5">
                                <h2 class="h1">Método BLW y BLISS</h2>
                                <div class="mx-5 mb-4">
                                    <p class="px-5 pt-3 lead d-none d-sm-block">
                                        Curso online, dictado por profesionales de la salud y orientado a profesionales
                                        de la salud afines que se desempeñen en el área pediátrica.
                                    </p>
                                </div>

                                <a class="btn btn-lg btn-secondary mt-auto" href="https://www.progresscap.cl/#cursos">Ver
                                    curso</a>

                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 d-none d-md-block">

                            <picture>

                                <source srcset="img/cursos/blw_blis-min.png" type="image/webp">
                                <source srcset="img/cursos/blw_blis-min.webp" type="image/png">

                                <img src="img/cursos/blw_blis-min.webp" class="img-responsive rounded shadow-5-strong"
                                     height="650"
                                     loading="lazy"
                                     alt="Metodo BLW y BLISS">
                            </picture>
                        </div>


                    </div>

                </div>
            </div>

        </div>
    </div>

    <section id="acerca">

        <div class="container mt-5 pt-5">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h3 class="h1">Bienvenido a Progress</h3>

                    <h3 class="mt-5 fw-bold">Quienes Somos</h3>
                    <p class="text-muted mb-5 lead">Somos un <b>Organismo Técnico de Capaticatión</b> (OTEC) enfocado en
                        la
                        capacitación de
                        profesionales de las áreas de salud y educación.</p>

                    <div class="d-flex justify-content-start align-items-start align-self-stretch mb-4">

                        <div class="icon-background-lg d-flex justify-content-center align-items-center flex-shrink-0">
                            <i class="fas fa-chalkboard-teacher fa-2x icon"></i>
                        </div>

                        <div class="ms-4 flex-grow-1">
                            <h4 class="h4 mb-3 fw-bold">Cursos Online</h4>
                            <p class="text-muted lead">Ofrecemos dos tipos de cursos: sincrónicos y asincrónicos.</p>
                        </div>

                    </div>

                    <div class="d-flex justify-content-start align-items-start align-self-stretch mb-4">

                        <div class="icon-background-lg d-flex justify-content-center align-items-center flex-shrink-0">
                            <i class="fas fa-award fa-2x icon"></i>
                        </div>

                        <div class="ms-4 flex-grow-1">
                            <h4 class="h4 mb-3 fw-bold">Cursos certificados</h4>
                            <p class="text-muted lead">Nuestros cursos cuentan con certificación OTEC.</p>
                        </div>

                    </div>

                    <div class="d-flex justify-content-start align-items-start align-self-stretch mb-4">

                        <div class="icon-background-lg d-flex justify-content-center align-items-center flex-shrink-0">
                            <i class="fas fa-stopwatch fa-2x icon"></i>
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
                        <img class="img-fluid" src="/img/progress_logo_completo-min.jpg" alt="ProgressCap Logo"
                             loading="lazy">
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

                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="bg-image hover-overlay hover-zoom">

                                    <picture>

                                        <source srcset="img/cursos/blw_blis-min.webp" type="image/webp">
                                        <source srcset="img/cursos/blw_blis-min.png" type="image/png">

                                        <img
                                                src="img/cursos/blw_blis-min.png"
                                                class="card-img-top"
                                                alt="Método BLW y BLISS"
                                                loading="lazy"
                                        />
                                    </picture>

                                    <div class="mask ">
                                        <a href="https://drive.google.com/file/d/10FF3DWU3bJ37FQSBS1Ci70KIbwIM7MpU/view?usp=drivesdk"
                                           target="_blank" rel="noopener noreferrer nofollow">
                                            <div class="d-flex align-items-center justify-content-center h-100">

                                                <div class="icon-background d-flex justify-content-center align-items-center">
                                                    <i class="fas fa-external-link-alt fa-2x icon"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fw-bolder">Método BLW y BLISS</h5>
                                    <p class="card-text text-muted lead">
                                        Curso online, dictado por profesionales de la salud y orientado a profesionales
                                        de la salud afines que se desempeñen en el área pediátrica.
                                    </p>
                                    <a class="btn btn-lg btn-primary mt-auto"
                                       target="_blank" rel="noopener noreferrer nofollow"
                                       href="https://drive.google.com/file/d/10FF3DWU3bJ37FQSBS1Ci70KIbwIM7MpU/view?usp=drivesdk"><i
                                                class="fas fa-plus fa-lg me-2"></i>información</a>
                                </div>

                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <h5 class="h5 text-muted">Asincrónico online</h5>
                                        <!--<h5 class="h5 text-muted ms-auto ">
                                            <del class="old-price d-none">$150.000</del>
                                            $XX.XX
                                        </h5>-->
                                    </div>
                                    <div class="d-flex d-none">
                                        <p class="ms-auto mb-0 pb-0 lead">Oferta por 48 horas</p>
                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="bg-image hover-overlay hover-zoom">

                                    <picture>

                                        <source srcset="img/cursos/rechazo_iv-min.webp" type="image/webp">
                                        <source srcset="img/cursos/rechazo_iv-min.png" type="image/png">
                                        <img
                                                src="img/cursos/rechazo_iv-min.png"
                                                class="card-img-top"
                                                alt="Anatomofisiologia"
                                                loading="lazy"
                                        />
                                    </picture>

                                    <div class="mask ">
                                        <a target="_blank" rel="noopener noreferrer nofollow"
                                           href="https://drive.google.com/file/d/1jMqt1oOpj4i6o0nLTsH5v9ZYVPqwopGu/view">
                                            <div class="d-flex align-items-center justify-content-center h-100">

                                                <div class="icon-background d-flex justify-content-center align-items-center">
                                                    <i class="fas fa-external-link-alt fa-2x icon"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fw-bold">Rechazo Alimentario IV</h5>
                                    <p class="card-text text-muted lead">
                                        Curso online, dictado por profesionales de la salud y orientado a profesionales
                                        de la salud que se desempeñen en el área pediátrica. O estudiantes de carreras
                                        del área de salud.
                                    </p>

                                    <a class="btn btn-lg btn-primary mt-auto"
                                       target="_blank" rel="noopener noreferrer nofollow"
                                       href="https://drive.google.com/file/d/1jMqt1oOpj4i6o0nLTsH5v9ZYVPqwopGu/view"><i
                                                class="fas fa-plus fa-lg me-2"></i>información</a>
                                </div>

                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <h5 class="h5 text-muted">Asincrónico online</h5>
                                        <!--<h5 class="h5 text-muted ms-auto">$XX.XX</h5>-->
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="bg-image hover-overlay hover-zoom">

                                    <picture>

                                        <source srcset="img/cursos/autista-min.webp" type="image/webp">
                                        <source srcset="img/cursos/autista-min.png" type="image/png">
                                        <img
                                                src="img/cursos/autista-min.png"
                                                class="card-img-top"
                                                alt="Trastorno del Espectro Autista"
                                                loading="lazy"
                                        />
                                    </picture>
                                    <div class="mask ">
                                        <a target="_blank" rel="noopener noreferrer nofollow"
                                           href="https://drive.google.com/file/d/1Lo7urz4XGDi10iujGrw9mVyzVjX7WBcW/view">
                                            <div class="d-flex align-items-center justify-content-center h-100">

                                                <div class="icon-background d-flex justify-content-center align-items-center">
                                                    <i class="fas fa-external-link-alt fa-2x icon"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fw-bold">Trastorno del Espectro Autista</h5>
                                    <p class="card-text text-muted lead">
                                        Curso online, que tiene como objetivo: comprender, actualizar conocimiento,
                                        conocer nuevas formas de intervención y aprender a evaluar y elaborar informes
                                        de evaluación y seguimiento. Curso dirigido a profesionales de la salud,
                                        educación y estudiantes de carreras afines.
                                    </p>

                                    <a class="btn btn-lg btn-primary mt-auto"
                                       target="_blank" rel="noopener noreferrer nofollow"
                                       href="https://drive.google.com/file/d/1Lo7urz4XGDi10iujGrw9mVyzVjX7WBcW/view"><i
                                                class="fas fa-plus fa-lg me-2"></i>información</a>
                                </div>

                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <h5 class="h5 text-muted">Sincrónico online</h5>
                                        <!--<h5 class="h5 text-muted ms-auto">$XX.XX</h5>-->
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>


                    <!-- COMENTADO PARA POSIBLE USO FUTURO -->
                    <!--
                    <div class="row mt-2 g-4 d-flex justify-content-center">

                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="bg-image hover-overlay hover-zoom">

                                    <picture>

                                        <source srcset="img/cursos/interaccion_digital-min.webp" type="image/webp">
                                        <source srcset="img/cursos/interaccion_digital-min.png" type="image/png">
                                        <img
                                                src="img/cursos/interaccion_digital-min.png"
                                                class="card-img-top"
                                                alt="Curso Interacción Digital"
                                                loading="lazy"
                                        />
                                    </picture>

                                    <div class="mask ">
                                        <a href="#">
                                            <div class="d-flex align-items-center justify-content-center h-100">

                                                <div class="icon-background d-flex justify-content-center align-items-center">
                                                    <i class="fas fa-external-link-alt fa-2x icon"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fw-bold">Interacción digital</h5>
                                    <p class="card-text text-muted lead">(Agregar descripción del curso de interacción
                                        digital)</p>

                                    <button class="btn btn-lg btn-outline-primary mt-auto">Ver curso</button>
                                </div>

                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <h5 class="h5 text-muted">Sincrónico online</h5>
                                        <h5 class="h5 text-muted ms-auto">$XX.XX</h5>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="bg-image hover-overlay hover-zoom">

                                    <picture>

                                        <source srcset="img/cursos/tea-min.webp" type="image/webp">
                                        <source srcset="img/cursos/tea-min.png" type="image/png">
                                        <img
                                                src="img/cursos/tea-min.png"
                                                class="card-img-top"
                                                alt="Curso TEA"
                                                loading="lazy"
                                        />
                                    </picture>
                                    <div class="mask">
                                        <a href="#">
                                            <div class="d-flex align-items-center justify-content-center h-100">

                                                <div class="icon-background d-flex justify-content-center align-items-center">
                                                    <i class="fas fa-external-link-alt fa-2x icon"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fw-bold">Estrategias Educativas TEA</h5>
                                    <p class="card-text text-muted lead">El diagnóstico de Trastrorno del Espectro
                                        Autista ha incrementado en el último tiempo, debido a la constante percepción
                                        de los profesionales de la salud y educación, así como también el
                                        diagnóstico precoz, que permite con ello una intervención precoz.</p>

                                    <button class="btn btn-lg btn-outline-primary mt-auto">Ver curso</button>
                                </div>

                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <h5 class="h5 text-muted">Sincrónico online</h5>
                                        <h5 class="h5 text-muted ms-auto">$XX.XX</h5>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>-->

                </div>
            </div>

        </div>
    </section>

    <section id="certificados">
        <div class="container-fluid mt-5 py-5 certificados">
            <div class="row text-center">
                <h1 class="h2 mb-5">Certifica</h1>
                <div class="d-flex flex-row justify-content-center align-items-center">
                    <!--suppress CheckImageSize -->
                    <img src="img/iCONTEC.png" class="img-responsive rounded mx-5" height="180" alt="IconTec">
                    <!--suppress CheckImageSize -->
                    <img src="img/otec_sence.jpg" class="img-responsive rounded mx-5" height="180" alt="SENCE Otec">
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
                                    <i class="fas fa-map-marker-alt icon"></i>
                                </div>

                                <div class="ms-3 flex-grow-1">
                                    <p class="text-muted m-0 ">Las Rojas Poniente #236, La Serena, Chile.</p>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="d-flex justify-content-start align-items-center mb-2">

                                <div class="icon-background-md d-flex justify-content-center align-items-center flex-shrink-0">
                                    <i class="fas fa-phone-alt icon"></i>
                                </div>

                                <div class="ms-3 flex-grow-1">
                                    <p class="text-muted m-0 ">+569 56876165</p>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="d-flex justify-content-start align-items-center mb-2">

                                <div class="icon-background-md d-flex justify-content-center align-items-center flex-shrink-0">
                                    <i class="fas fa-envelope icon"></i>
                                </div>

                                <div class="ms-3 flex-grow-1">
                                    <p class="text-muted m-0 ">capacitaciones.progress@gmail.com</p>
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
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div class="col-11 "><a href="https://www.progresscap.cl/#inicio">Inicio</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1 text-center">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div class="col-11 "><a href="https://www.progresscap.cl/#acerca">Acerca</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1 text-center">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div class="col-11 "><a href="https://www.progresscap.cl/#cursos">Cursos</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1 text-center">
                                <i class="fas fa-arrow-right"></i>
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
                        <a
                                class="btn btn-floating btn-lg m-1 text-white shadow-1-strong"
                                href="https://www.instagram.com/cap.progress"
                                rel="noopener noreferrer nofollow"
                                role="button"
                                style="background-color: #E1306C"
                                target="_blank"
                        ><i class="fab fa-instagram fa-lg"></i
                            ></a>
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
            López & Eguiluz LTDA<br/>
            INN: A-9854 <br/>
            <p class="my-0">Diseñado por <a class="fw-bold" href="https://www.figonzal.cl"
                                            rel="noopener noreferrer nofollow"
                                            target="_blank">figonzal.cl</a></p>
        </div>
    </section>

</footer>


<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js" async></script>
<!-- JQUERY -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" async>
    $(window).scroll(function () {
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 800);
    });
</script>

<script src="js/modernizr-custom.js"></script>
<script>
    Modernizr.on('webp', function (result) {
        if (result) {
            // supported
        } else {
            // not-supported
        }
    });
</script>
</body>
</html>
