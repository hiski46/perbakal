<?php

namespace Modules\dashboard\Controllers;

use Modules\dashboard\Controllers\Dashboard;

class Baner extends Dashboard
{

    public function index()
    {
        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('/auth/login');
        }

        $this->rander(view("$this->view\content\baner"));
    }

    public function modalTambah()
    {
        $html = '<div class="row"> 
                    <div class="col-12 col-md-6">';
        $html .= form_open('', ['id' => 'baner-form']);
        $html .= form_label('Gambar :', '', ['class' => 'form-label']);
        $html .= form_input(['name' => 'file_baner', 'id' => 'file_baner', 'class' => 'form-control', 'onchange' => 'previewFile(this)'], '', '', 'file');
        $html .= '<div class="">' . form_label('Text Baner :', '', ['class' => 'form-label mt-3']);
        $html .= form_input(['class' => 'form-control', 'placeholder' => 'Masukkan text baner', 'name' => 'text', 'id' => 'text'], '',) . '</div>';
        $html .= form_close();
        $html .= '</div>
                    <div class="col-12 col-md-6">
                        <p>Preview Gambar</p>
                        <img src="https://dummyimage.com/1920x1080/333/fff.jpg&text=contoh+ukuran+perbandingan+baner:+1920x1080" id="preview-gambar" style="height:200px;" class ="img-fluid img-thumbnail">
                  </div>
            </div>
            <script>$("#baner-form").validate({
                rules: {
                    file_baner: {
                        required: true,
                        extension: "jpg|png|jpeg",
                        filesize: 5242880,
                    },
                    text: {
                        required: false,
                        maxlength: 50
                    }
                },
                messages: {
                    file_baner: {
                        required: "File harus diisi",
                        extension: "File harus berupa ganbar",
                        filesize : "File maksimal 10MB",
                    },
                    text: {
                        required: true,
                        maxlength: "Maksimal Karakter 50",
                        
                    }
                  }
            });</script>';
        return $this->modal(
            'Tambah Baner',
            $html,
            "save()",
            'primary',
            'Simpan',
            'modal-lg'
        );
    }
}
