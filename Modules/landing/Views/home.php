<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>PERBAKAL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="<?= base_url('landing') ?>/img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('/landing') ?>/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="<?= base_url('/landing') ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('/landing') ?>/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="<?= base_url('/landing') ?>/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center border-start border-end px-3">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small><?= $kontak_alamat['telepon']  ?></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center border-end px-3">
                    <small class="far fa-envelope-open me-2"></small>
                    <small><?= $kontak_alamat['email'] ?></small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-square border-end border-start" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square border-end" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square border-end" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square border-end" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
        <a href="home.html" class="navbar-brand d-flex align-items-center">
            <img src="<?= base_url('upload/' . $organisasi['logo']) ?>" alt="" style="height:5vh;">
            <h1 class="m-0">
                PERBAKAL
            </h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-3 py-lg-0">
                <a href="home.html" class="nav-item nav-link active">Home</a>
                <a href="tentang.html" class="nav-item nav-link">Tentang Kami</a>
                <a href="berita.html" class="nav-item nav-link">Berita Artikel</a>
                <div class="nav-item dropdown">
                    <a href="struktur.html" class="nav-item nav-link nav-link dropdown-toggle" data-bs-toggle="dropdown">Struktur Ogranisasi</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Sie</a>
                        <a href="appointment.html" class="dropdown-item">Sie</a>
                        <a href="team.html" class="dropdown-item">Sie</a>
                        <a href="testimonial.html" class="dropdown-item">Sie</a>
                        <a href="404.html" class="dropdown-item">Sie</a>
                    </div>
                </div>
                <a href="kontak.html" class="nav-item nav-link">Kontak Kami</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $i = 0;
                foreach ($baner as $b) { ?>
                    <div class="carousel-item <?= ($i == 0) ? 'active' : '' ?> ">
                        <img class="" src="<?= base_url('upload/' . $b['gambar']) ?>" alt="Image" style="height: 100vh; width:inherit; object-fit: cover;" />
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-10">
                                        <h5 class="text-light text-uppercase mb-3 animated slideInDown">
                                            Welcome to PERBAKAL
                                        </h5>
                                        <h1 class="display-2 text-light mb-3 animated slideInDown">
                                            Persatuan Batak Karo Lampung
                                        </h1>
                                        <ol class="breadcrumb mb-4 pb-2">
                                            <li class="breadcrumb-item fs-5 text-light">
                                                Suku Adat
                                            </li>
                                            <li class="breadcrumb-item fs-5 text-light">
                                                Budaya
                                            </li>
                                            <li class="breadcrumb-item fs-5 text-light">
                                                Batak Karo
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $i++;
                } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
                        <img class="position-absolute w-100 h-100" src="<?= base_url('upload/' . $organisasi['logo']) ?>" alt="" style="object-fit: cover" />
                        <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px">
                            <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                                <h2 class="text-white">Logo</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <h6 class="text-body text-uppercase mb-2">Tentang Kami</h6>
                            <h1 class="display-6 mb-0">
                                Persatuan Batak Karo Lampung
                            </h1>
                        </div>
                        <p>
                            Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                            Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                            sed stet lorem sit clita duo justo magna dolore erat amet
                        </p>
                        <p class="mb-4">
                            Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                            Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                            sed stet lorem sit clita duo justo magna dolore erat amet
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-fluid my-5 p-0">
        <div class="row g-0">
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="<?= base_url('/landing') ?>/img/fact-1.jpg" alt="" />
                    <div class="facts-overlay">
                        <h1 class="display-1">01</h1>
                        <h4 class="text-white mb-3">Construction</h4>
                        <p class="text-white">
                            Aliqu diam amet diam et eos erat ipsum lorem stet lorem sit
                            clita duo justo erat amet
                        </p>
                        <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="<?= base_url('/landing') ?>/img/fact-2.jpg" alt="" />
                    <div class="facts-overlay">
                        <h1 class="display-1">02</h1>
                        <h4 class="text-white mb-3">Mechanical</h4>
                        <p class="text-white">
                            Aliqu diam amet diam et eos erat ipsum lorem stet lorem sit
                            clita duo justo erat amet
                        </p>
                        <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="<?= base_url('/landing') ?>/img/fact-3.jpg" alt="" />
                    <div class="facts-overlay">
                        <h1 class="display-1">03</h1>
                        <h4 class="text-white mb-3">Architecture</h4>
                        <p class="text-white">
                            Aliqu diam amet diam et eos erat ipsum lorem stet lorem sit
                            clita duo justo erat amet
                        </p>
                        <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="<?= base_url('/landing') ?>/img/fact-4.jpg" alt="" />
                    <div class="facts-overlay">
                        <h1 class="display-1">04</h1>
                        <h4 class="text-white mb-3">Interior Design</h4>
                        <p class="text-white">
                            Aliqu diam amet diam et eos erat ipsum lorem stet lorem sit
                            clita duo justo erat amet
                        </p>
                        <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Why Choose Us!</h6>
                        <h1 class="display-6 mb-0">
                            Our Specialization And Company Features
                        </h1>
                    </div>
                    <p class="mb-5">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">Large number of services provided</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">25+ years of professional experience</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">A large number of grateful customers</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">Always reliable and affordable prices</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
                        <img class="position-absolute w-100 h-100" src="<?= base_url('/landing') ?>/img/feature.jpg" alt="" style="object-fit: cover" />
                        <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px">
                            <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                                <h1 class="text-white">25</h1>
                                <h2 class="text-white">Years</h2>
                                <h5 class="text-white mb-0">Experience</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        <h6 class="text-body text-uppercase mb-2">Berita</h6>
                        <h1 class="display-6 mb-0">
                            Berita & Artikel
                        </h1>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
                    <a class="btn btn-primary py-3 px-5" href="">Semua Berita</a>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <?php foreach ($berita as $br) { ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.s">
                        <div class="service-item bg-light overflow-hidden h-100">
                            <img class="img-fluid" src="<?= ($br['type'] == 'kutip') ?  $br['thumbnail'] : base_url('upload/' . $br['thumbnail']) ?>" alt="" />
                            <div class="service-text position-relative text-center h-100 p-4">
                                <h5 class="mb-3"><?= $br['judul'] ?></h5>
                                <p>
                                    Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                    amet diam et eos
                                </p>
                                <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Appointment Start -->
    <div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h1 class="display-6 text-white mb-0">
                            Visi
                        </h1>
                    </div>
                    <div class="text-white mb-0">
                        <?= $visi ?>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h1 class="display-6 text-white mb-0">
                            Misi
                        </h1>
                    </div>
                    <div class="text-white mb-0">
                        <?= $misi ?>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Appointment End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        <h6 class="text-body text-uppercase mb-2">pengurus</h6>
                        <h1 class="display-6 mb-0">Pengurus</h1>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <p class="mb-0">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet
                    </p> -->
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <img class="h-100 w-100" src="<?= base_url('upload/' . $ketua['foto']) ?>" alt="" style='height: 100vh; width:inherit; object-fit:cover;' />
                        <div class="team-text bg-white p-4">
                            <h5><?= $ketua['nama'] ?></h5>
                            <span>Ketua</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <img class="img-fluid" src="<?= base_url('upload/' . $sekretaris['foto']) ?>" alt="" />
                        <div class="team-text bg-white p-4">
                            <h5><?= $sekretaris['nama'] ?></h5>
                            <span>Sekretaris</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <img class="img-fluid" src="<?= base_url('upload/' . $bendahara['foto']) ?>" alt="" />
                        <div class="team-text bg-white p-4">
                            <h5><?= $bendahara['nama'] ?></h5>
                            <span>Bendahara</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Testimonial</h6>
                        <h1 class="display-6 mb-0">What Our Happy Clients Say!</h1>
                    </div>
                    <p class="mb-4">
                        Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                        ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                        dolore erat amet
                    </p>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa fa-users fa-2x text-primary flex-shrink-0"></i>
                                <h1 class="ms-3 mb-0">123+</h1>
                            </div>
                            <h5 class="mb-0">Happy Clients</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0"></i>
                                <h1 class="ms-3 mb-0">123+</h1>
                            </div>
                            <h5 class="mb-0">Projects Done</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <img class="img-fluid mb-4" src="<?= base_url('/landing') ?>/img/testimonial-1.jpg" alt="" />
                            <p class="fs-5">
                                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                                et labore et tempor diam tempor erat.
                            </p>
                            <div class="bg-primary mb-3" style="width: 60px; height: 5px"></div>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid mb-4" src="<?= base_url('/landing') ?>/img/testimonial-2.jpg" alt="" />
                            <p class="fs-5">
                                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                                et labore et tempor diam tempor erat.
                            </p>
                            <div class="bg-primary mb-3" style="width: 60px; height: 5px"></div>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="text-white mb-4">
                        <i class="fa fa-building text-primary me-3"></i>PERBAKAL
                    </h1>
                    <p>
                        Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                        ipsum et lorem et sit, sed stet lorem sit clita
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-primary me-1" href="<?= $kontak_alamat['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href="<?= $kontak_alamat['youtube'] ?>"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href="<?= $kontak_alamat['instagram'] ?>"><i class="fab fa-instagram"></i></a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Alamat</h4>
                    <p>
                        <!-- <i class="fa fa-map-marker-alt me-3"></i>LBH Nasional Jl. KiMaja No.172 WayHalim Bandarlampung -->
                        <i class="fa fa-map-marker-alt me-3"></i><?= $kontak_alamat['alamat'] ?>
                    </p>
                    <!-- <p><i class="fa fa-phone-alt me-3"></i>0721-784454</p> -->
                    <p><i class="fa fa-phone-alt me-3"></i><?= $kontak_alamat['telepon'] ?></p>
                    <!-- <p><i class="fa fa-envelope me-3"></i>perbakal@example.com</p> -->
                    <p><i class="fa fa-envelope me-3"></i><?= $kontak_alamat['email'] ?></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="tentang.html">Tentang Kami</a>
                    <a class="btn btn-link" href="kontak.html">Kontak Kami</a>
                    <a class="btn btn-link" href="struktur.html">Struktur Organisasi</a>
                    <a class="btn btn-link" href="berita.html">Berita Artikel</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Hubungi Kami</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" />
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            SignUp
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">PERBAKAL</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        <br />Distributed By:
                        <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('/landing') ?>/lib/wow/wow.min.js"></script>
    <script src="<?= base_url('/landing') ?>/lib/easing/easing.min.js"></script>
    <script src="<?= base_url('/landing') ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url('/landing') ?>/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('/landing') ?>/js/main.js"></script>
</body>

</html>