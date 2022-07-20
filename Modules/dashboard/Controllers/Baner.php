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
        $html .= form_open();
        $html .= form_label('Gambar :', '', ['class' => 'form-label']);
        $html .= form_input(['name' => 'file_baner', 'class' => 'form-control', 'onchange' => 'previewFile(this)'], '', '', 'file');
        $html .= form_label('Text Baner :', '', ['class' => 'form-label mt-3']);
        $html .= form_input(['class' => 'form-control', 'placeholder' => 'Masukkan text baner'],);
        $html .= form_close();
        $html .= '</div>
                    <div class="col-12 col-md-6">
                        <p>Preview Gambar</p>
                        <img id="preview-gambar" style="height:200px;" class ="img-fluid img-thumbnail">
                  </div>
            </div>';
        return $this->modal(
            'Tambah Baner',
            $html,
            base_url('baner/save'),
            'primary',
            'Simpan',
            'modal-lg'
        );
    }
}
