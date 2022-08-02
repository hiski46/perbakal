<?= $this->extend('Modules\landing\Views\layout') ?>

<?= $this->section('content') ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">Tentang Kami</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a class="text-white" href="#">Home</a>
                </li>
                <li class="breadcrumb-item text-primary active" aria-current="page">
                    Tentang Kami
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

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

<?= $this->endSection() ?>