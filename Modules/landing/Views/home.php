<?= $this->extend('Modules\landing\Views\layout') ?>

<?= $this->section('content') ?>

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
                                    <h4 class="text-light text-uppercase mb-3 animated slideInDown">
                                        Mejuah-Juah
                                    </h4>
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
                        <?= $organisasi['tentang'] ?>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
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
<!-- Facts Start -->
<!-- Facts End -->

<!-- Features Start -->
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
                <div id="list-berita" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="<?= ($br['type'] == 'kutip') ?  $br['thumbnail'] : base_url('upload/' . $br['thumbnail']) ?>" alt="" />
                        <div class="service-text position-relative h-100 p-4">
                            <h5 class="mb-3 text-center"><?= $br['judul'] ?></h5>
                            <?php if ($br['type'] != 'kutip') { ?>
                                <small class="mt-2"><?= $br['create_at'] ?> <b>Oleh: <?= $br['penulis'] ?></b> </small>
                                <p>
                                    <?= substr($br['isi'], 0, 100)  ?>[...]
                                </p>
                                <div class="text-end">
                                    <a class="small" href="<?= base_url('landing_page/detail/' . $br['id']) ?>">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            <?php } else { ?>
                                <div class="text-end">
                                    <a class="small" href="<?= $br['penulis'] ?>">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Service End -->



<!-- Testimonial Start -->

<!-- Testimonial End -->

<?= $this->endSection() ?>