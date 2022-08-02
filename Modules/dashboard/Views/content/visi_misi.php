<h1 class="mt-4">Visi & Misi</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
    <li class="breadcrumb-item">Organisasi</li>
    <li class="breadcrumb-item active">Visi Misi</li>
</ol>

<div class="card">
    <div class="card-header">
        <h5>Edit Visi & Misi </h5>
    </div>
    <div class="card-body">
        <form method="POST" id="formVisiMisi" action="<?= base_url('organisasi/saveVisiMisi'); ?>">
            <div class="row">
                <div class="col-md-6">
                    <h1>Visi</h1>
                    <textarea name="visi" id="visi" cols="30" rows="10"><?= $visi; ?></textarea>
                </div>
                <div class="col-md-6">
                    <h1>Misi</h1>
                    <textarea name="misi" id="misi" cols="30" rows="10"><?= $misi; ?></textarea>
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <button onclick="modalSaveVisiMisi()" class="btn btn-primary">Simpan</button>
    </div>
</div>

<div class="modal" id="modalVisiMisi" tabindex="-1">

</div>

<script>
    // ClassicEditor
    //     .create(document.querySelector('#visi'))
    //     .catch(error => {
    //         console.error(error);
    //     });

    // ClassicEditor
    //     .create(document.querySelector('#misi'))
    //     .catch(error => {
    //         console.error(error);
    //     });
    $(document).ready(function() {
        $('#visi').summernote()
        $('#misi').summernote()
    })

    function modalSaveVisiMisi() {
        $.ajax({
            url: "<?= base_url('organisasi/modalSaveVisiMisi'); ?>",
            method: "GET",
            success: function(data) {
                $('#modalVisiMisi').html('');
                $('#modalVisiMisi').html(data);
                $('#modalVisiMisi').modal('show');
            }
        })
    }

    function saveVisiMisi() {
        $('#formVisiMisi').submit();
    }
</script>