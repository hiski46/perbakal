<div id="content-berita">
    <h1 class="mt-4">Berita & Artikel</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item">Berita&Artikel</li>
        <li class="breadcrumb-item active">Berita</li>
    </ol>

    <div class="card">
        <div class="card-header">
            <div class="float-start">
                <h5>List Berita</h5>
            </div>
            <div class="float-end">
                <button onclick="tambahBerita()" class="btn btn-sm btn-primary">Tambah</button>
            </div>
        </div>
        <div class="card-body">
            <table id="table-berita">
                <thead>
                    <tr>
                        <th>Thubmail</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Type</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1">

</div>

<script>
    $(document).ready(function() {
        $('#table-berita').DataTable({
            searching: true,
            responsive: true,
            ajax: "<?= base_url('berita/list_berita'); ?>"
        })
    })

    function tambahBerita() {
        $.ajax({
            url: "<?= base_url('berita/tambahBerita') ?>",
            method: 'GET',
            success: function(data) {
                $('#content-berita').html(data);
            }
        })
    }

    function edit(id) {
        $.ajax({
            url: "<?= base_url('berita/editBerita') ?>/" + id,
            method: 'GET',
            success: function(data) {
                $('#content-berita').html(data);
            }
        })
    }

    function modalHapus(id) {
        $.ajax({
            url: "<?= base_url('berita/modalHapus') ?>/" + id,
            method: 'GET',
            success: function(data) {
                $('.modal').html("");
                $('.modal').html(data);
                $('.modal').modal('show');
            }
        })
    }

    function deleteBerita(id) {
        $.ajax({
            url: "<?= base_url('berita/hapus') ?>/" + id,
            method: 'DELETE',
            success: function(html) {
                location.reload()
            }
        })
    }
</script>