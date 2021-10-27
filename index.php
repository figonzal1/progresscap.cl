<?php
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Content-Security-Policy: default-src 'self' https://*.google.com/ ;img-src 'self' data:;frame-src 'self' https://*.google.com/  ;font-src 'self' https://use.fontawesome.com https://fonts.googleapis.com ;script-src 'self' 'unsafe-inline' https://ajax.googleapis.com ;style-src 'self' 'unsafe-inline' https://fonts.googleapis.com/ https://use.fontawesome.com");
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

        .carousel-item:nth-child(1),
        .carousel-item:nth-child(2),
        .carousel-item:nth-child(3) {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .webp .carousel-item:nth-child(1) {
            background-image: url('img/background2-min.webp');
        }

        .no-webp .carousel-item:nth-child(1) {
            background-image: url('img/background2-min.jpg');
        }

        .webp .carousel-item:nth-child(2) {
            background-image: url('img/background2-min.webp');
        }

        .no-webp .carousel-item:nth-child(2) {
            background-image: url('img/background2-min.jpg');
        }

        .webp .carousel-item:nth-child(3) {
            background-image: url('img/background2-min.webp');
        }

        .no-webp .carousel-item:nth-child(3) {
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
                    <a href="#" aria-current="page" class="nav-link active">Inicio</a>
                    <a href="#" aria-current="page" class="nav-link">Nosotros</a>
                    <a href="#" aria-current="page" class="nav-link">Cursos</a>
                    <a href="#" aria-current="page" class="nav-link">Contacto</a>
                </div>

                <!-- Left Icons -->
                <div class="navbar-nav d-flex flex-row ms-auto">
                    <a href="https://www.moodle.progresscap.cl" rel="noopener noreferrer" target="_blank"
                       class="nav-link ms-auto ms-md-0">Moodle</a>
                    <a class="nav-link" href="https://www.instagram.com/cap.progress/"
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
    <div class="carousel slide  shadow-2-strong" data-mdb-ride="carousel" id="introCarousel">

        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li class="active" data-mdb-slide-to="0" data-mdb-target="#introCarousel"></li>
            <li data-mdb-slide-to="1" data-mdb-target="#introCarousel"></li>
            <li data-mdb-slide-to="2" data-mdb-target="#introCarousel"></li>
        </ol>

        <!-- Imagenes -->
        <div class="carousel-inner">

            <div class="carousel-item active webp" data-mdb-interval="7000">
                <div class="mask dark-bg w-100">

                    <div class="d-flex justify-content-center align-items-center h-100">

                        <div class="col-md-7 col-sm-12">
                            <div class="d-row text-center text-white px-5">
                                <h2 class="h1">Estrategias para la Interacción Digital</h2>
                                <div class="mx-5 mb-4">
                                    <p class="px-5 pt-3 lead d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.
                                        Curabitur eget
                                        bibendum neque. Quisque pharetra neque nisi, quis malesuada nisi pellentesque
                                        ut.
                                        Mauris laoreet metus ut odio dictum, ut aliquam massa pretium. Mauris at lorem
                                        in
                                        lorem dictum euismod. Sed vitae nibh ut tortor ornare cursus. Interdum et
                                        malesuada
                                        fames a</p>
                                </div>
                                <button class="btn btn-lg btn-secondary mt-auto">Ver curso</button>

                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 d-none d-md-block">

                            <picture>
                                <source srcset="img/cursos/interaccion_digital-min.png" type="image/png">
                                <source srcset="img/cursos/interaccion_digital-min.webp" type="image/webp">

                                <img src="img/cursos/interaccion_digital-min.png"
                                     class="img-responsive rounded shadow-5-strong"
                                     height="500"
                                     loading="lazy"
                                     alt="Interaccion Digital">
                            </picture>

                        </div>


                    </div>

                </div>
            </div>

            <div class="carousel-item webp" data-mdb-interval="7000">
                <div class="mask dark-bg w-100">

                    <div class="d-flex justify-content-center align-items-center h-100">

                        <div class="col-md-7 col-sm-12">
                            <div class="d-row text-center text-white px-5">
                                <h2 class="h1">Alergia Alimentaria</h2>
                                <div class="mx-5 mb-4">
                                    <p class="px-5 pt-3 lead d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.
                                        Curabitur eget
                                        bibendum neque. Quisque pharetra neque nisi, quis malesuada nisi pellentesque
                                        ut.
                                        Mauris laoreet metus ut odio dictum, ut aliquam massa pretium. Mauris at lorem
                                        in
                                        lorem dictum euismod. Sed vitae nibh ut tortor ornare cursus. Interdum et
                                        malesuada
                                        fames a</p>
                                </div>
                                <button class="btn btn-lg btn-secondary mt-auto">Ver curso</button>

                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 d-none d-md-block">

                            <picture>
                                <source srcset="img/cursos/alergia_alimentaria-min.png" type="image/png">
                                <source srcset="img/cursos/alergia_alimentaria-min.webp" type="image/webp">

                                <img src="img/cursos/alergia_alimentaria-min.png"
                                     class="img-responsive rounded shadow-5-strong"
                                     height="500"
                                     loading="lazy"
                                     alt="Alergia Alergia Alimentaria">
                            </picture>

                        </div>


                    </div>

                </div>
            </div>

            <div class="carousel-item webp" data-mdb-interval="7000">
                <div class="mask dark-bg w-100">

                    <div class=" d-flex justify-content-center align-items-center h-100">

                        <div class="col-md-7 col-sm-12">
                            <div class="d-row text-center text-white px-5">
                                <h2 class="h1">Estrategias Educativas para el alumno con TEA</h2>
                                <div class="mx-5 mb-4">
                                    <p class="px-5 pt-3 lead d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.
                                        Curabitur eget
                                        bibendum neque. Quisque pharetra neque nisi, quis malesuada nisi pellentesque
                                        ut.
                                        Mauris laoreet metus ut odio dictum, ut aliquam massa pretium. Mauris at lorem
                                        in
                                        lorem dictum euismod. Sed vitae nibh ut tortor ornare cursus. Interdum et
                                        malesuada
                                        fames a</p>
                                </div>
                                <button class="btn btn-lg btn-secondary mt-auto">Ver curso</button>

                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 d-none d-md-block">

                            <picture>

                                <source srcset="img/cursos/tea-min.webp" type="image/webp">
                                <source srcset="img/cursos/tea-min.png" type="image/png">
                                <img src="img/cursos/tea-min.png" class="img-responsive rounded shadow-5-strong"
                                     height="500"
                                     loading="lazy"
                                     alt="Transtorno Espectro Autista">
                            </picture>
                        </div>


                    </div>

                </div>
            </div>

        </div>
    </div>

    <section id="Acerca">

        <div class="container mt-5 pt-5">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h3 class="h1">Bienvenido a Progress</h3>

                    <h3 class="mt-5 fw-bold">Quienes Somos</h3>
                    <p class="text-muted mb-5 lead">Somos un <b>Organismo Técnico de Capaticatión</b> (OTEC) enfocado en
                        la
                        capacitación de
                        profesionales de las áreas de salud y educación</p>

                    <div class="d-flex justify-content-start align-items-start align-self-stretch mb-4">

                        <div class="icon-background-lg d-flex justify-content-center align-items-center flex-shrink-0">
                            <i class="fas fa-chalkboard-teacher fa-2x icon"></i>
                        </div>

                        <div class="ms-4 flex-grow-1">
                            <h4 class="h4 mb-3">Cursos Online</h4>
                            <p class="text-muted lead">Ofrecemos cursos sincrónicos y asincrónico</p>
                        </div>

                    </div>

                    <div class="d-flex justify-content-start align-items-start align-self-stretch mb-4">

                        <div class="icon-background-lg d-flex justify-content-center align-items-center flex-shrink-0">
                            <i class="fas fa-chalkboard-teacher fa-2x icon"></i>
                        </div>

                        <div class="ms-4 flex-grow-1">
                            <h4 class="h4 mb-3">Cursos Online</h4>
                            <p class="text-muted lead">Ofrecemos cursos sincrónicos y asincrónico</p>
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


    <section id="Cursos">

        <div class="container mt-5 pt-5">

            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="text-center">
                        <h3 class="h1">Explora nuestros cursos</h3>
                        <p class="h5 text-muted lead">(Cambiar texto) Libris vivendo eloquentiam ex ius, nec id
                            splendide
                            abhorreant.</p>
                    </div>
                </div>

                <div class="col-md-12">

                    <!-- GRID SISTEM -->
                    <div class="row g-4">

                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="bg-image hover-overlay hover-zoom">

                                    <picture>

                                        <source srcset="img/cursos/apraxia_infantil-min.webp" type="image/webp">
                                        <source srcset="img/cursos/apraxia_infantil-min.png" type="image/png">

                                        <img
                                                src="img/cursos/apraxia_infantil-min.png"
                                                class="card-img-top"
                                                alt="Apraxia Infantil"
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
                                    <h5 class="card-title">Apraxia del Habla Infantil</h5>
                                    <p class="card-text lead">
                                        (Agregar descripcion del curso de apraxia infantil)
                                    </p>
                                    <button class="btn btn-lg btn-outline-primary mt-auto">Ver curso</button>
                                </div>

                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <h5 class="h5 text-muted">Sincrónico online</h5>
                                        <h5 class="h5 text-muted ms-auto">
                                            <del class="old-price">$150.000</del>
                                            $80.000
                                        </h5>
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

                                        <source srcset="img/cursos/anatomofisiologia-min.webp" type="image/webp">
                                        <source srcset="img/cursos/anatomofisiologia-min.png" type="image/png">
                                        <img
                                                src="img/cursos/anatomofisiologia-min.png"
                                                class="card-img-top"
                                                alt="Anatomofisiologia"
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
                                    <h5 class="card-title">Anatomofisiología de la Articulación</h5>
                                    <p class="card-text lead">
                                        (Agregar descripcion del curso de anatomofisiología)
                                    </p>

                                    <button class="btn btn-lg btn-outline-primary mt-auto">Ver curso</button>
                                </div>

                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <h5 class="h5 text-muted">Sincrónico online</h5>
                                        <h5 class="h5 text-muted ms-auto">$150.000</h5>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="bg-image hover-overlay hover-zoom">

                                    <picture>

                                        <source srcset="img/cursos/alergia_alimentaria-min.webp" type="image/webp">
                                        <source srcset="img/cursos/alergia_alimentaria-min.png" type="image/png">
                                        <img
                                                src="img/cursos/alergia_alimentaria-min.png"
                                                class="card-img-top"
                                                alt="Alergia Alimentaria"
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
                                    <h5 class="card-title">Alergia Alimentaria</h5>
                                    <p class="card-text text-muted lead">El curso online de Alergias alimentarias es
                                        dictado
                                        por
                                        profesionales de la salud y orientado a profesionales de la salud afines que se
                                        desempeñen en el área de alimentación.</p>

                                    <button class="btn btn-lg btn-outline-primary mt-auto">Ver curso</button>
                                </div>

                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <h5 class="h5 text-muted">Asincrónico online</h5>
                                        <h5 class="h5 text-muted ms-auto">$150.000</h5>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
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
                                    <h5 class="card-title">Interacción digital</h5>
                                    <p class="card-text text-muted lead">(Agregar descripción del curso de interacción
                                        digital)</p>

                                    <button class="btn btn-lg btn-outline-primary mt-auto">Ver curso</button>
                                </div>

                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <h5 class="h5 text-muted">Sincrónico online</h5>
                                        <h5 class="h5 text-muted ms-auto">$150.000</h5>
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
                                    <h5 class="card-title">Estrategias Educativas TEA</h5>
                                    <p class="card-text text-muted lead">(Agregar descripción del curso de estrategias
                                        educativas)</p>

                                    <button class="btn btn-lg btn-outline-primary mt-auto">Ver curso</button>
                                </div>

                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <h5 class="h5 text-muted">Sincrónico online</h5>
                                        <h5 class="h5 text-muted ms-auto">$150.000</h5>
                                    </div>

                                </div>

                            </div>
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
                                    <i class="fas fa-envelope icon"></i>
                                </div>

                                <div class="ms-3 flex-grow-1">
                                    <p class="text-muted m-0 ">contacto@progresscap.cl</p>
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
                            <div class="col-11 "><a href="https://www.progresscap.cl/#servicios">Servicios</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1 text-center">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div class="col-11 "><a href="https://www.progresscap.cl/#especialistas">Especialistas</a>
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
            Capacitaciones Progress<br/>
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
