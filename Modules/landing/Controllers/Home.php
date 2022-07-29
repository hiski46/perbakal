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
}
