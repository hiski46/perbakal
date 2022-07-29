<h1 class="mt-4">Tambah Berita</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
    <li class="breadcrumb-item">Berita&Artikel</li>
    <li class="breadcrumb-item"><a href="<?= base_url('berita') ?>">Berita</a></li>
    <li class="breadcrumb-item">Edit Berita</li>

</ol>

<div class="card">
    <div class="card-header">
        <h5>Edit Berita</h5>
    </div>
    <div class="card-body">
        <form id="form-edit-berita" action="berita/update/tulis" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="id" value="<?= $berita['id'] ?>">
            <div class="row mb-3">
                <div class="col-md-8">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul berita" value="<?= $berita['judul'] ?>">
                        <label for="judul">Judul Berita</label>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="thumbnail" class="form-label">Thumbnail</label>
                        <input class="form-control" onchange="previewFile(this)" type="file" id="thumbnail" name="thumbnail">
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Preview Gambar</p>
                    <img src="<?= base_url('upload/' . $berita['thumbnail']) ?>" id="preview-gambar" style="height:fit-content; width: fit-content;" class="img-fluid img-thumbnail">

                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis" value="<?= $berita['penulis'] ?>">
                        <label for="penulis">Penulis</label>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
            <p>Isi Berita</p>
            <textarea class="form-control" name="isi" id="isi" cols="30" rows="15" placeholder="Isi berita"><?= $berita['isi'] ?></textarea>
        </form>
    </div>
    <div class="card-footer">
        <div class="float-end">
            <button onclick="alertSave()" class="btn btn-sm btn-primary">Simpan</button>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1">

</div>

<script>
    $(document).ready(function() {
        $('#isi').summernote()
    })

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

    function alertSave() {
        $.ajax({
            url: "<?= base_url('berita/alertSave') ?>",
            method: 'GET',
            success: function(data) {
                $('.modal').html("");
                $('.modal').html(data);
                $('.modal').modal('show');
            }
        })
    }

    function save() {
        $('#form-edit-berita').submit();
    }
</script>