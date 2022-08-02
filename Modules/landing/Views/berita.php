<?= $this->extend('Modules\landing\Views\layout') ?>

<?= $this->section('content') ?>

<style>
    /* Cosmetic only */
    /* #easyPaginate {
        width: 300px;
    }

    #easyPaginate img {
        display: block;
        margin-bottom: 10px;
    } */
    .easyPaginateNav {
        margin-top: 5vh;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;

    }

    .easyPaginateNav a {
        padding: 5px;
        /* border-color: black; */
    }

    .easyPaginateNav a:hover {
        padding: 5px;
        background: fixed;
        background-color: antiquewhite;
    }


    .easyPaginateNav a.current {
        font-weight: bold;
        background-color: antiquewhite;
    }
</style>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">Berita & Artikel</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a class="text-white" href="#">Home</a>
                </li>
                <li class="breadcrumb-item text-primary active" aria-current="page">
                    Berita & Artikel
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Berita Start -->
<div class="container">
    <div id="easyPaginate" class="row g-4 justify-content-center">
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
<!-- Berita End -->
<script>
    $('#easyPaginate').easyPaginate({
        paginateElement: 'div#list-berita',
        elementsPerPage: 9,
    });
</script>

<?= $this->endSection() ?>