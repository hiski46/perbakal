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
                <div class="text-end me-4"><button class="btn btn-primary"><i class="fa-solid fa-folder-plus"></i> Tambah</button></div>
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

<script>
    $(document).ready(function() {
        $('#table-baner').DataTable({
            searching: false,
        })
    })
</script>