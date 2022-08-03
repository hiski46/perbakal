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
    <link href="<?= base_url('/landing') ?>/css/bootstrap.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="<?= base_url('/landing') ?>/css/style.css" rel="stylesheet" />

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?= base_url('/landing') ?>/js/jquery.easyPaginate.js"></script>

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
                    <a class="btn btn-square border-end border-start" href="<?= $kontak_alamat['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square border-end" href="<?= $kontak_alamat['youtube'] ?>"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square border-end" href="<?= $kontak_alamat['instagram'] ?>"><i class="fab fa-instagram"></i></a>
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
                <a href="<?= base_url() ?>" class="nav-item nav-link active">Home</a>
                <a href="<?= base_url('landing_page/tentang') ?>" class="nav-item nav-link">Tentang Kami</a>
                <a href="<?= base_url('landing_page/pengurus') ?>" class="nav-item nav-link">Pengurus</a>
                <a href="<?= base_url('landing_page/berita') ?>" class="nav-item nav-link">Berita Artikel</a>
                <a href="<?= base_url('landing_page/kontak') ?>" class="nav-item nav-link">Kontak Kami</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <?= $this->renderSection('content') ?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h1 class="text-white mb-4">
                        <img src="<?= base_url('upload/' . $organisasi['logo']) ?>" alt="" style="height:5vh;"> PERBAKAL
                    </h1>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-primary me-1" href="<?= $kontak_alamat['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href="<?= $kontak_alamat['youtube'] ?>"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href="<?= $kontak_alamat['instagram'] ?>"><i class="fab fa-instagram"></i></a>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
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
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="<?= base_url('landing_page/tentang') ?>">Tentang Kami</a>
                    <a class="btn btn-link" href="<?= base_url('landing_page/tentang') ?>">Kontak Kami</a>
                    <a class="btn btn-link" href="<?= base_url('landing_page/tentang') ?>">Struktur Organisasi</a>
                    <a class="btn btn-link" href="<?= base_url('landing_page/tentang') ?>">Berita Artikel</a>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Hubungi Kami</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" />
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            SignUp
                        </button>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">PERBAKAL</a>, All Right Reserved.
                    </div>
                    <!-- <div class="col-md-6">
                        <a href="https://wa.widget.web.id/81395c" target="_blank"><img src="https://wa.widget.web.id/assets/img/tombol-wa.png"></a>
                    </div> -->
                    <!-- <div class="col-md-6 text-center text-md-end"> -->
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a> -->
                    <!-- <br />Distributed By: -->
                    <!-- <a href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
                    <!-- </div> -->
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

    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "+6285896224113", // WhatsApp number
                call_to_action: "Kirimi kami pesan", // Call to action
                button_color: "#FF6550", // Color of button
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = 'https:',
                host = "getbutton.io",
                url = proto + '//static.' + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->
</body>

</html>