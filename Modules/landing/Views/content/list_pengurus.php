<div class="row g-4">
    <?php foreach ($pengurus as $p) { ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item position-relative">
                <img class="h-100 w-100" src="<?= ($p['foto']) ? base_url('upload/' . $p['foto']) : base_url('upload/default.png') ?>" alt="" style='height: 100vh; width:inherit; object-fit:cover;' />
                <div class="team-text bg-white ">
                    <h6><?= $p['nama'] ?></h6>
                    <div><small><?= ($p['jabatan'] == 'bph' || $p['jabatan'] == 'dp') ? '' : ucfirst($p['jabatan'])  ?> <?= $kepengurusan[$p['kepengurusan']]['jabatan'] ?></small></div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>