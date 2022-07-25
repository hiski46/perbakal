<h1 class="mt-4">Logo</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
    <li class="breadcrumb-item">Organisasi</li>
    <li class="breadcrumb-item active">Logo</li>
</ol>

<div class="card">
    <div class="card-header">
        <h5>Logo PERBAKAL</h5>
    </div>
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <img src="<?= base_url('upload/' . $logo) ?>" alt="" style="width: 50%;">
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col">
                <button id="ubah-logo" type="button" onclick="formUbahLogo()" class="btn btn-primary">
                    <i class="fa-solid fa-pen-to-square"></i> Ubah
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1">

</div>
<script>
    function formUbahLogo() {
        $.ajax({
            url: "<?= base_url('organisasi/formUbahLogo') ?>",
            method: 'GET',
            success: function(data) {
                $('.modal').html("");
                $('.modal').html(data);
                $('.modal').modal('show');
            }
        })
    }

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

    function saveLogo() {
        $('#logo-form').submit()
    }
</script>