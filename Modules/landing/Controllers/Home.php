<?php

namespace Modules\landing\Controllers;

use Modules\dashboard\Controllers\Dashboard;

class Home extends Dashboard
{
    protected $homeView;
    public function __construct()
    {
        parent::__construct();
        $this->homeView = 'Modules\landing\Views';
    }

    public function index()
    {
        $data['baner'] = $this->BanerModel->where('deleted_at', NULL)->findAll();
        $data['visi'] = $this->OrganisasiModel->select('visi')->find(1)['visi'];
        $data['misi'] = $this->OrganisasiModel->select('misi')->find(1)['misi'];
        $data['berita'] = $this->BeritaModel->orderBy('id', 'DESC')->findAll(6);
        $data['ketua'] = $this->AnggotaModel->where('kepengurusan', 2)->findAll()[0];
        $data['sekretaris'] = $this->AnggotaModel->where('kepengurusan', 5)->findAll()[0];
        $data['bendahara'] = $this->AnggotaModel->where('kepengurusan', 8)->findAll()[0];
        $data['kontak_alamat'] = $this->KontakAlamatModel->find(1);
        $data['organisasi'] = $this->OrganisasiModel->find(1);
        // dd($data);
        return view("$this->homeView\home", $data);
    }

    public function tentang()
    {
        $data['organisasi'] = $this->OrganisasiModel->find(1);
        $data['kontak_alamat'] = $this->KontakAlamatModel->find(1);
        return view("$this->homeView\\tentang", $data);
    }

    public function kontak()
    {
        $data['organisasi'] = $this->OrganisasiModel->find(1);
        $data['kontak_alamat'] = $this->KontakAlamatModel->find(1);
        return view("$this->homeView\\kontak", $data);
    }
    public function pengurus()
    {
        $data['organisasi'] = $this->OrganisasiModel->find(1);
        $data['kontak_alamat'] = $this->KontakAlamatModel->find(1);
        $data['pengurus'] = $this->AnggotaModel->findAll();
        $data['kepengurusan_sie'] = $this->KepengurusanModel->where('type', 'sie')->findAll();
        $data['ketua'] = $this->AnggotaModel->where('kepengurusan', 2)->findAll()[0];
        $data['sekretaris'] = $this->AnggotaModel->where('kepengurusan', 5)->findAll()[0];
        $data['bendahara'] = $this->AnggotaModel->where('kepengurusan', 8)->findAll()[0];
        return view("$this->homeView\\pengurus", $data);
    }

    public function list_pengurus()
    {
        $id = $this->request->getPost('id');
        $data = [];
        $kepengurusan = $this->KepengurusanModel->findAll();
        foreach ($kepengurusan as $k) {
            $data['kepengurusan'][$k['id']] = $k;
        }
        if ($id == 2) {
            $data['pengurus'] = $this->AnggotaModel->where('kepengurusan', 2)->orWhere('kepengurusan', 3)->orWhere('kepengurusan', 4)->findAll();
        } else if ($id == 5) {
            $data['pengurus'] = $this->AnggotaModel->where('kepengurusan', 5)->orWhere('kepengurusan', 6)->orWhere('kepengurusan', 7)->findAll();
        } else if ($id == 8) {
            $data['pengurus'] = $this->AnggotaModel->where('kepengurusan', 8)->orWhere('kepengurusan', 9)->findAll();
        } else {
            $data['pengurus'] = $this->AnggotaModel->where('kepengurusan', $id)->findAll();
        }

        return view("$this->homeView\content\list_pengurus", $data);
    }

    public function berita()
    {
        $berita = $this->BeritaModel->findAll();
        $data['organisasi'] = $this->OrganisasiModel->find(1);
        $data['kontak_alamat'] = $this->KontakAlamatModel->find(1);
        $data['berita'] = $berita;
        return view("$this->homeView\berita", $data);
    }

    public function detail($id)
    {
        $berita = $this->BeritaModel->find($id);
        $data['organisasi'] = $this->OrganisasiModel->find(1);
        $data['kontak_alamat'] = $this->KontakAlamatModel->find(1);
        $data['berita'] = $berita;
        return view("$this->homeView\content\detail_berita", $data);
    }
}
