<h4><?= $kepengurusan_text ?></h4>
<form action="<?= base_url('pengurus/save') ?>" method="POST" id="form-pengurus" enctype="multipart/form-data">
    <div class="row">
        <div class="col text-center">
            <img src="<?= ($type == 'create') ? base_url('upload/default.jpg') : base_url('upload/' . $anggota['foto'])  ?>" id="preview-gambar" style="height:200px;" class="img-fluid img-thumbnail">
        </div>
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" name="foto" id="foto" onchange="previewFile(this)" class="form-control form-control-sm">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control form-control-sm" name="nama" id="nama" placeholder="Masukkan Nama" value="<?= ($type == 'update') ? $anggota['nama'] : '' ?>">
    </div>
    <div class="mb-3">
        <div class="row">
            <label for="tempat" class="form-label">TTL</label>
        </div>
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control form-control-sm" name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" value="<?= ($type == 'update') ? $anggota['tempat_lahir'] : '' ?>">
            </div>
            <div class="col-md-6">
                <input type="date" class="form-control form-control-sm" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="<?= ($type == 'update') ? $anggota['tanggal_lahir'] : '' ?>">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control form-control-sm" name="alamat" id="alamat" cols="20" rows="2"><?= ($type == 'update') ? $anggota['alamat'] : '' ?></textarea>
    </div>
    <div class="mb-3">
        <label for="medsos" class="form-label">Media Sosial</label>
        <input type="url" class="form-control form-control-sm" name="medsos" id="medsos" placeholder="Masukkan Link Medsos" value="<?= ($type == 'update') ? $anggota['medsos'] : '' ?>">
    </div>
    <input type="hidden" name="kepengurusan" value="<?= $kepengurusan ?>">
    <input type="hidden" name="jabatan" value="<?= $jabatan ?>">
    <input type="hidden" name="type" value="<?= $type ?>">
    <?php if ($type == 'update') { ?>
        <input type="hidden" name="id" id="id" value="<?= $anggota['id'] ?>">
    <?php } ?>
</form>

<script>
    function previewFile(input) {
        const file = input.files[0];
        console.log(file);
        if (file) {
            let reader = new FileReader();
            reader.onload = function(event) {
                $('#preview-gambar').attr('src', event.target.result);
            }
            reader.readAsDataURL(file);
        }
    }

    function save() {
        $('#form-pengurus').submit();
    }
</script>