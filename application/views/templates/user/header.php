<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>DukCapil Bulukumba</title>

    <!-- CSS FILES -->
    <link href="<?= base_url('assets/user/') ?>css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url('assets/user/') ?>css/bootstrap-icons.css" rel="stylesheet">

    <link href="<?= base_url('assets/user/') ?>css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->

</head>

<body id="section_1">

    <!-- <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        Akershusstranda 20, 0150 Oslo, Norway
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@company.com">
                            info@company.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header> -->

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('') ?>">
                <img src="<?= base_url('assets/user/') ?>images/logo.png" class="logo img-fluid" alt="Kind Heart Charity">
                <span>
                    Kantor DisdukCapil Bulukmba
                    <small>Caile, Kec. Ujung Bulu, Kabupaten Bulukumba, Sulawesi Selatan 92518</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('') ?>">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('nomor_antrian') ?>">Nomor Antrian</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link click-scroll dropdown-toggle" href="#section_5"
                            id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><?= $dt_user->nama ?></a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?= base_url('home/reset') ?>">Profil</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('login') ?>">Log Out</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- CONTEN -->
<main>

    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= base_url('assets/user/') ?>images/slide/header_2.png"
                                    class="carousel-image img-fluid" alt="...">

                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url('assets/user/') ?>images/slide/header_2.png"
                                    class="carousel-image img-fluid" alt="...">

                                
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url('assets/user/') ?>images/slide/header_2.png"
                                    class="carousel-image img-fluid" alt="...">

                            <!--     <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <h1>CAPIL</h1>

                                    <p>F622+M53, Caile, Kec. Ujung Bulu, Kabupaten Bulukumba, Sulawesi Selatan 92518 </p>
                                </div> -->
                            </div>

                           
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
