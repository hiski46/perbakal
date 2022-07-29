<h1 class="mt-4">Tambah Berita</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
    <li class="breadcrumb-item">Berita&Artikel</li>
    <li class="breadcrumb-item"><a href="<?= base_url('berita') ?>">Berita</a></li>
    <li class="breadcrumb-item">Tambah Berita</li>

</ol>

<div class="card">
    <div class="card-header">
        <h5>Tambah Berita</h5>
    </div>
    <div class="card-body">
        <form id="form-tambah-berita" action="berita/save/tulis" enctype="multipart/form-data" method="POST">
            <div class="row mb-3">
                <div class="col-md-8">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul berita">
                        <label for="judul">Judul Berita</label>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="thumbnail" class="form-label">Thumbnail</label>
                        <input class="form-control" onchange="previewFile(this)" type="file" id="thumbnail" name="thumbnail">
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Preview Gambar</p>
                    <img src="https://dummyimage.com/1920x1080/333/fff.jpg&text=contoh+ukuran+perbandingan+baner:+1920x1080" id="preview-gambar" style="height:fit-content; width: fit-content;" class="img-fluid img-thumbnail">

                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis">
                        <label for="penulis">Penulis</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <select class="form-select" id="type" name="type" aria-label="Floating label select example">
                            <option selected>Pilih Type</option>
                            <option value="berita">Berita</option>
                            <option value="artikel">Artikel</option>
                        </select>
                        <label for="type">Type</label>
                    </div>
                </div>
            </div>
            <p>Isi Berita</p>
            <textarea class="form-control" name="isi" id="isi" cols="30" rows="15" placeholder="Isi berita"></textarea>
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
        $('#form-tambah-berita').submit();
    }
</script>