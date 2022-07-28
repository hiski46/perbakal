<?php

namespace Modules\dashboard\Controllers;

use Modules\dashboard\Controllers\Dashboard;

class Organisasi extends Dashboard
{
    protected $data_organisasi;
    public function __construct()
    {
        parent::__construct();
        $this->data_organisasi = $this->OrganisasiModel->find(1);
    }

    public function logo()
    {
        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('/auth/login');
        }


        $data['logo'] = $this->data_organisasi['logo'];
        $this->rander(view("$this->view\content\logo", $data));
    }

    public function formUbahLogo()
    {
        $html = '<div class="row"> 
                    <div class="col-12 col-md-6">';
        $html .= form_open_multipart(base_url('organisasi/saveLogo'), ['id' => 'logo-form']);
        $html .=  csrf_field();
        $html .= form_label('Gambar :', '', ['class' => 'form-label']);
        $html .= form_input(['name' => 'file_logo', 'id' => 'file_logo', 'class' => 'form-control', 'onchange' => 'previewFile(this)'], '', '', 'file');
        $html .= form_close();
        $html .= '</div>
                    <div class="col-12 col-md-6">
                        <p>Preview Gambar</p>
                        <img src="' . base_url("upload/" . $this->data_organisasi['logo']) . '" id="preview-gambar" style="height:200px;" class ="img-fluid img-thumbnail">
                  </div>
            </div>
            <script>$("#logo-form").validate({
                rules: {
                    file_baner: {
                        required: true,
                        extension: "jpg|png|jpeg",
                        
                    },
                },
                messages: {
                    file_baner: {
                        required: "File harus diisi",
                        extension: "File harus berupa ganbar",
                        
                    },
                  }
            });</script>';
        return $this->modal(
            'Ubah Logo',
            $html,
            "saveLogo()",
            'primary',
            'Simpan',
            'modal-lg'
        );
    }

    public function saveLogo()
    {
        $img = $this->request->getFile('file_logo');

        if (!$img->hasMoved()) {
            $name = $img->getRandomName();
            $img->move('../public/upload', $name);
            $data = [
                'logo' => $name,
            ];
            $this->OrganisasiModel->update(1, $data);
            return redirect()->to('organisasi/logo');
        }
        return redirect()->to('organisasi/logo');
    }

    public function visi_misi()
    {
        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('/auth/login');
        }


        $data['visi'] = $this->data_organisasi['visi'];
        $data['misi'] = $this->data_organisasi['misi'];
        $this->rander(view("$this->view\content\\visi_misi", $data));
    }

    public function saveVisiMisi()
    {
        $visi = $this->request->getPost('visi');
        $misi = $this->request->getPost('misi');

        $data['visi'] = $visi;
        $data['misi'] = $misi;

        $this->OrganisasiModel->update(1, $data);
        return redirect()->to('organisasi/visi_misi');
    }

    public function modalSaveVisiMisi()
    {
        return $this->modal(
            'Simpan Perubahan',
            'Apakah Anda yakin ingin menyimpan perubahan ?',
            'saveVisiMisi()',
            'primary',
            'Simpan',
        );
    }

    public function tentang()
    {
        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('/auth/login');
        }
        $data['tentang'] = $this->data_organisasi['tentang'];
        $this->rander(view("$this->view\content\\tentang", $data));
    }

    public function modalUbahTentang()
    {
        return $this->modal(
            'Simpan Perubahan',
            'Apakah Anda yakin ingin menyimpan perubahan ?',
            'saveTentang()',
            'primary',
            'Simpan',
        );
    }

    public function saveTentang()
    {
        $tentang = $this->request->getPost('tentang');
        $data['tentang'] = $tentang;

        $this->OrganisasiModel->update(1, $data);
        return redirect()->to('organisasi/tentang');
    }
}
