<h1 class="mt-4">Pengurus</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
    <li class="breadcrumb-item">Organisasi</li>
    <li class="breadcrumb-item active">Pengurus</li>
</ol>
<div class="card">
    <div class="card-header">
        <h5 class="float-start">Edit Pengurus</h5>
        <!-- <button class="btn btn-sm btn-primary float-end">Tambah</button> -->
    </div>
    <div class="card-body">
        <div class="row border-bottom pb-3">
            <div class="col-md-4 border-end">
                <table>
                    <tbody>
                        <tr>
                            <td class="mb-1" style="width:20%">Ketua</td>
                            <td class="mb-1" style="width:75%">: <?= $ketua ?></td>
                            <td class="mb-1" style="width:5%"><button onclick="modalSave('ketua')" class="btn btn-sm p-0 btn-light"><i class="fa-solid text-success fa-pen-to-square"></i></button></td>
                        </tr>
                        <tr>
                            <td class="mb-1" style="width:20%">Ketua I</td>
                            <td class="mb-1" style="width:75%">: <?= $ketuaI ?></td>
                            <td class="mb-1" style="width:5%"><button onclick="modalSave('ketua1')" class="btn btn-sm p-0 btn-light"><i class="fa-solid text-success fa-pen-to-square"></i></button></td>
                        </tr>
                        <tr>
                            <td class="mb-1" style="width:20%">Ketua II</td>
                            <td class="mb-1" style="width:75%">: <?= $ketuaII ?></td>
                            <td class="mb-1" style="width:5%"><button onclick="modalSave('ketua2')" class="btn btn-sm p-0 btn-light"><i class="fa-solid text-success fa-pen-to-square"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4 border-end">
                <table>
                    <tbody>
                        <tr>
                            <td style="width:20%">Sekretaris</td>
                            <td style="width:75%">: <?= $sekretaris ?></td>
                            <td style="width:5%"><button onclick="modalSave('sekretaris')" class="btn btn-sm p-0 btn-light"><i class="fa-solid text-success fa-pen-to-square"></i></button></td>
                        </tr>
                        <tr>
                            <td style="width:20%">Sekretaris I</td>
                            <td style="width:75%">:<?= $sekretarisI ?></td>
                            <td style="width:5%"><button onclick="modalSave('sekretaris1')" class="btn btn-sm p-0 btn-light"><i class="fa-solid text-success fa-pen-to-square"></i></button></td>
                        </tr>
                        <tr>
                            <td style="width:20%">Sekretaris II</td>
                            <td style="width:75%">:<?= $sekretarisII ?></td>
                            <td style="width:5%"><button onclick="modalSave('sekretaris2')" class="btn btn-sm p-0 btn-light"><i class="fa-solid text-success fa-pen-to-square"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <table>
                    <tbody>
                        <tr>
                            <td style="width:20%">Bendahara</td>
                            <td style="width:75%">:<?= $bendahara ?></td>
                            <td style="width:5%"><button onclick="modalSave('bendahara')" class="btn btn-sm p-0 btn-light"><i class="fa-solid text-success fa-pen-to-square"></i></button></td>
                        </tr>
                        <tr>
                            <td style="width:20%">Bendahara I</td>
                            <td style="width:75%">: <?= $bendaharaI ?></td>
                            <td style="width:5%"><button onclick="modalSave('bendahara1')" class="btn btn-sm p-0 btn-light"><i class="fa-solid text-success fa-pen-to-square"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="card-footer">

    </div>
    <div class="card">
        <div class="card-header">
            <h5>Seksi Bidang</h5>
        </div>
        <div class="card-body">
            <div class="row mt-2">
                <?php foreach ($sie as $s) { ?>
                    <div class="col-md-4 border-end border-bottom pb-3 mb-2">
                        <table class="">
                            <tbody>
                                <tr> <b><?= $s['jabatan'] ?></b> </tr>
                                <tr>
                                    <td class="mb-1" style="width:20%">Koordinator</td>
                                    <td class="mb-1" style="width:75%">: <?= $koordinatorSie[$s['id']]['nama'] ?></td>
                                    <td class="mb-1" style="width:10%"><button onclick="modalSaveKoordinator(<?= $s['id'] ?>)" class="btn btn-sm text-success p-0 btn-light"><i class="fa-solid fa-pen-to-square"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="mb-1 align-top" style="width:20%" class="text-justify-content-start-">Anggota :</td>
                                    <td class="mb-1" style="width:75%">
                                        <table>
                                            <tbody>
                                                <?php foreach ($anggotaSie as $a) {
                                                    if ($a['kepengurusan'] == $s['id']) { ?>
                                                        <tr>
                                                            <td><?= $a['nama'] ?></td>
                                                            <td><small><span onclick="modalUpdateAnggota(<?= $s['id'] ?>, <?= $a['id'] ?>)" style="cursor: pointer;" class="text-success"><i class="fa-solid fa-pen-to-square"></i></span></small></td>
                                                            <td><small><span onclick="modalDeleteAnggota(<?= $a['id'] ?>)" style="cursor: pointer;" class="text-danger"><i class="fa-solid fa-trash"></i></span></small></td>
                                                        </tr>
                                                <?php }
                                                } ?>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="mb-1 align-top" style="width:10%"><button onclick="modalCreateAnggota(<?= $s['id'] ?>)" class="btn btn-sm p-0 btn-light"><i class="fa-solid text-primary fa-circle-plus"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modalTentang" tabindex="-1">

</div>
<script>
    function modalSave(type) {
        $.ajax({
            url: "<?= base_url('pengurus/modalSave/') ?>/" + type,
            type: "GET",
            success: function(data) {
                $(".modal").html('')
                $(".modal").html(data)
                $(".modal").modal('show')
            }
        })
    }

    function modalSaveKoordinator(id) {
        $.ajax({
            url: "<?= base_url('pengurus/modalSaveKoordinator/') ?>/" + id,
            type: "GET",
            success: function(data) {
                $(".modal").html('')
                $(".modal").html(data)
                $(".modal").modal('show')
            }
        })
    }

    function modalCreateAnggota(id) {
        $.ajax({
            url: "<?= base_url('pengurus/modalSaveAnggota/') ?>/" + id + "/create",
            type: "GET",
            success: function(data) {
                $(".modal").html('')
                $(".modal").html(data)
                $(".modal").modal('show')
            }
        })
    }

    function modalUpdateAnggota(id, id_anggota) {
        $.ajax({
            url: "<?= base_url('pengurus/modalSaveAnggota/') ?>/" + id + "/update/" + id_anggota,
            type: "GET",
            success: function(data) {
                $(".modal").html('')
                $(".modal").html(data)
                $(".modal").modal('show')
            }
        })
    }

    function modalDeleteAnggota(id_anggota) {
        $.ajax({
            url: "<?= base_url('pengurus/modalDeleteAnggota/') ?>/" + id_anggota,
            type: "GET",
            success: function(data) {
                $(".modal").html('')
                $(".modal").html(data)
                $(".modal").modal('show')
            }
        })
    }

    function deleteAnggota(id) {
        $.ajax({
            url: "<?= base_url('pengurus/deleteAnggota/') ?>/" + id,
            type: "POST",
            success: function(data) {
                location.reload();
            }
        })
    }
</script>