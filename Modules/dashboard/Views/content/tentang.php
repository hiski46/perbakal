<h1 class="mt-4">Tentang</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
    <li class="breadcrumb-item">Organisasi</li>
    <li class="breadcrumb-item active">Tentang</li>
</ol>

<div class="card">
    <div class="card-header">
        <h5>Edit Tentang Organisasi</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('organisasi/saveTentang'); ?>" id="form-tentang" method="post">
            <textarea name="tentang" id="tentang" cols="30" rows="10"><?= $tentang; ?></textarea>
        </form>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary" onclick="modalUbahTentang()">Simpan</button>
    </div>
</div>

<div class="modal" id="modalTentang" tabindex="-1">

</div>

<script>
    ClassicEditor
        .create(document.querySelector('#tentang'))
        .catch(error => {
            console.error(error);
        });

    function modalUbahTentang() {
        $.ajax({
            url: "<?= base_url('organisasi/modalUbahTentang'); ?>",
            method: "GET",
            success: function(data) {
                $('#modalTentang').html('');
                $('#modalTentang').html(data);
                $('#modalTentang').modal('show');
            }
        })
    }

    function saveTentang() {
        $('#form-tentang').submit();
    }
</script>