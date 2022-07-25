<?php

namespace Modules\dashboard\Controllers;

use Modules\dashboard\Controllers\Dashboard;

class KontakAlamat extends Dashboard
{

    public function index()
    {
        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('/auth/login');
        }
        $kontak_alamat = $this->KontakAlamatModel->find(1);
        $data['kontak_alamat'] = $kontak_alamat;
        $this->rander(view("$this->view\content\kontak_alamat", $data));
    }

    public function save()
    {
        $alamat = $this->request->getPost('alamat');
        $telepon = $this->request->getPost('telepon');
        $email = $this->request->getPost('email');
        $facebook = $this->request->getPost('facebook');
        $youtube = $this->request->getPost('youtube');
        $instagram = $this->request->getPost('instagram');

        $data = [
            'alamat' => $alamat,
            'telepon' => $telepon,
            'email' => $email,
            'facebook' => $facebook,
            'youtube' => $youtube,
            'instagram' => $instagram,
        ];

        if ($this->KontakAlamatModel->update(1, $data)) {
            return redirect()->to('kontak_alamat');
        }
    }
}
