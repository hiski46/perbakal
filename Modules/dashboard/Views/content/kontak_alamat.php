<h1 class="mt-4">Kontak & Alamat</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Kontak & Alamat</li>
</ol>

<div class="card mb-4">
    <div class="card-header">
        <h5>Form kontak & alamat</h5>
    </div>
    <div class="card-body ps-5">
        <form action="<?= base_url('kontak_alamat/save') ?>" class="row" method="POST">
            <div class="input-group mb-3 row">
                <span class="input-group-text col-md-2 col-6"><i class="fa-solid fa-location-dot"></i> Alamat</span>
                <textarea name="alamat" class="form-control" aria-label="With textarea"><?= ($kontak_alamat['alamat']) ? $kontak_alamat['alamat'] : '' ?></textarea>
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-md-2 col-6" id="basic-addon1"><i class="fa-solid fa-phone"></i>Telepon</span>
                <input type="text" class="form-control m-0" id="telepon" name="telepon" placeholder="Nomor Telepon" aria-label="telepon" aria-describedby="basic-addon1" value="<?= ($kontak_alamat['telepon']) ? $kontak_alamat['telepon'] : '' ?>">
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-md-2 col-6" id="basic-addon1"><i class="fa-solid fa-envelope"></i> Email</span>
                <input type="email" class="form-control m-0" id="email" name="email" placeholder="Alamat Email" aria-label="email" aria-describedby="basic-addon1" value="<?= ($kontak_alamat['email']) ? $kontak_alamat['email'] : '' ?>">
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-md-2 col-6" id="basic-addon1"><i class="fa-brands fa-facebook"></i> Facebook</span>
                <input type="text" class="form-control m-0" id="facebook" name="facebook" placeholder="Link Facebook" aria-label="facebook" aria-describedby="basic-addon1" value="<?= ($kontak_alamat['facebook']) ? $kontak_alamat['facebook'] : '' ?>">
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-md-2 col-6" id="basic-addon1"><i class="fa-brands fa-youtube"></i> Youtube</span>
                <input type="text" class="form-control m-0" id="youtube" name="youtube" placeholder="Link Youtube" aria-label="youtube" aria-describedby="basic-addon1" value="<?= ($kontak_alamat['youtube']) ? $kontak_alamat['youtube'] : '' ?>">
            </div>
            <div class="input-group mb-3 row">
                <span class="input-group-text col-md-2 col-6" id="basic-addon1"><i class="fa-brands fa-instagram"></i> Instagram</span>
                <input type="text" class="form-control m-0" id="instagram" name="instagram" placeholder="Link Instagram" aria-label="instagram" aria-describedby="basic-addon1" value="<?= ($kontak_alamat['instagram']) ? $kontak_alamat['instagram'] : '' ?>">
            </div>
            <div class="row justify-content-end">
                <button class="col-sm-4 col-md-2   btn btn-primary" type="submit"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
            </div>
        </form>
    </div>
</div>