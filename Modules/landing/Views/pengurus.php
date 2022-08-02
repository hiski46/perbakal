<?= $this->extend('Modules\landing\Views\layout') ?>

<?= $this->section('content') ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">Pengurus PERBAKAL</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a class="text-white" href="#">Home</a>
                </li>
                <li class="breadcrumb-item text-primary active" aria-current="page">
                    pengurus
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
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" id-data="2" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Ketua</a>
                    <a class="list-group-item list-group-item-action" id="list-home-list" id-data="5" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Sekretaris</a>
                    <a class="list-group-item list-group-item-action" id="list-home-list" id-data="8" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Bendahara</a>
                    <?php foreach ($kepengurusan_sie as $kep) { ?>
                        <a class="list-group-item list-group-item-action" id="list-home-list" id-data="<?= $kep['id'] ?>" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home"><?= $kep['jabatan'] ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<script>
    $(document).ready(function() {
        $('[id="list-home-list"]').click(function() {
            id = $(this).attr("id-data")
            $.ajax({
                url: "<?= base_url('landing_page/list_pengurus') ?>",
                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    $('#nav-tabContent').html(data);
                }
            })
        })
    })
</script>
<?= $this->endSection() ?>