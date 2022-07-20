<h1 class="mt-4">Baner</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Baner</li>
</ol>
<div class="card mb-4">
    <div class="ms-3 mt-3">
        <div class="row">
            <div class="col-6">
                <h3 class="card-title"><i class="fa-solid fa-image"></i>List Baner</h3>
            </div>
            <div class="col-6">
                <div class="text-end me-4"><button onclick="modalTambah()" class="btn btn-primary"><i class="fa-solid fa-folder-plus"></i> Tambah</button></div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table id="table-baner">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Gambar</th>
                    <th>Text</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<div class="modal" tabindex="-1">

</div>


<script>
    $(document).ready(function() {
        $('#table-baner').DataTable({
            searching: false,
        })


    })
    // $('[name="file_baner"]').click(function() {
    //     console.log('asdaksas');
    // })

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

    function modalTambah() {
        $.ajax({
            url: "<?= base_url('baner/modalTambah') ?>",
            method: 'GET',
            success: function(data) {
                $('.modal').html("");
                $('.modal').html(data);
                $('.modal').modal('show');
            }
        })
    }
</script>