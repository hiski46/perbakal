<?= $this->extend('Modules\landing\Views\layout') ?>

<?= $this->section('content') ?>



<!-- Page Header Start -->
<!-- Page Header End -->

<!-- Berita Start -->
<div class="container">

    <div class="text-center mt-3 mb-2">
        <img src=" <?= base_url('upload/' . $berita['thumbnail']) ?>" class="img-thumbnail" style="max-height: 50vh; width:inherit; object-fit: cover;" alt="...">
    </div>
    <div class="row">
        <div class="col">
            <h1 class="mb-4"><?= $berita['judul'] ?></h1>
            <p><?= $berita['create_at'] ?> <b> Oleh: <?= $berita['penulis'] ?></b></p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?= $berita['isi'] ?>
        </div>
    </div>
</div>
<!-- Berita End -->

<?= $this->endSection() ?>