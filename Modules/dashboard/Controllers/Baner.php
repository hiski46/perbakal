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
        $html .= form_open_multipart(base_url('baner/save'), ['id' => 'baner-form']);
        $html .=  csrf_field();
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

    public function modalEdit($id)
    {

        $baner = $this->BanerModel->find($id);
        $html = '<div class="row"> 
                    <div class="col-12 col-md-6">';
        $html .= form_open_multipart(base_url('baner/update'), ['id' => 'baner-form-edit']);
        $html .=  csrf_field();
        $html .= form_hidden('id_baner', $id);
        $html .= form_label('Gambar :', '', ['class' => 'form-label']);
        $html .= form_input(['name' => 'file_baner', 'id' => 'file_baner', 'class' => 'form-control', 'onchange' => 'previewFile(this)'], '', '', 'file');
        $html .= '<div class="">' . form_label('Text Baner :', '', ['class' => 'form-label mt-3']);
        $html .= form_input(['class' => 'form-control', 'value' => $baner['text'], 'name' => 'text', 'id' => 'text'], '',) . '</div>';
        $html .= form_close();
        $html .= '</div>
                    <div class="col-12 col-md-6">
                        <p>Preview Gambar</p>
                        <img src="' . base_url('upload/' . $baner['gambar']) . '" id="preview-gambar" style="height:200px;" class ="img-fluid img-thumbnail">
                  </div>
            </div>
            <script>$("#baner-form").validate({
                rules: {
                    file_baner: {
                        extension: "jpg|png|jpeg",
                        
                    },
                    text: {
                        maxlength: 50
                    }
                },
                messages: {
                    file_baner: {
                        extension: "File harus berupa ganbar",
                        
                    },
                    text: {
                        maxlength: "Maksimal Karakter 50",
                        
                    }
                  }
            });</script>';
        return $this->modal(
            'Edit Baner',
            $html,
            "update()",
            'primary',
            'Simpan',
            'modal-lg'
        );
    }
    public function modalHapus($id)
    {
        return $this->modal(
            'Hapus Baner',
            'Apakah Anda yakin menghapus Baner ?',
            "deleteBaner(" . $id . ")",
            'danger',
            'Hapus <i class="fa-solid fa-trash"></i>',
            'modal-sm'
        );
    }
    public function list_baner()
    {
        $list = $this->BanerModel->where(['deleted_at' => NULL])->asArray();
        $list = $this->BanerModel->findAll();
        $list_array = [];
        foreach ($list as $l) {
            $list_array[] = [
                '<img src="' . base_url('upload/' . $l['gambar']) . '" alt="gambar" sizes="" srcset="" style="width:200px">',
                $l['text'],
                form_button(['type' => 'button', 'class' => 'btn btn-sm btn-success', 'onclick' => 'modalEdit(' . $l['id'] . ')'], 'Edit <i class="fa-solid fa-pen-to-square"></i>') . form_button(['type' => 'button', 'class' => 'btn btn-sm btn-danger', 'onclick' => 'modalHapus(' . $l['id'] . ')'], 'Hapus <i class="fa-solid fa-trash"></i>')
            ];
        }

        $data['data'] = $list_array;
        echo json_encode($data);
    }

    public function save()
    {
        $img = $this->request->getFile('file_baner');

        if (!$img->hasMoved()) {
            $name = $img->getRandomName();
            $img->move('../public/upload', $name);
            $text = $this->request->getPost('text');
            $data = [
                'gambar' => $name,
                'text' => $text
            ];
            $this->BanerModel->insert($data);
            return redirect()->to('baner');
        }
        return redirect()->to('baner');
    }
    public function update()
    {
        $text = $this->request->getPost('text');
        $id = $this->request->getPost('id_baner');
        $img = $this->request->getFile('file_baner');
        if ($img->isValid()) {
            // $img = $this->request->getFile('file_baner');
            if (!$img->hasMoved()) {
                $name = $img->getRandomName();
                $img->move('../public/upload', $name);
                $data = [
                    'gambar' => $name,
                    'text' => $text,

                ];
            }
        } else {
            $data = [
                'text' => $text,

            ];
        }
        $this->BanerModel->update($id, $data);
        return redirect()->to('baner');
    }

    public function hapus($id)
    {
        if ($this->BanerModel->delete($id) == 1) {
            return "sucess";
        }
    }
}
