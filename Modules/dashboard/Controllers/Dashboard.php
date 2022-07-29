<?php

namespace Modules\dashboard\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    protected $ionAuth;
    protected $view;
    protected $BanerModel;
    protected $KontakAlamatModel;
    protected $OrganisasiModel;
    protected $KepengurusModel;
    protected $KepengurusanModel;
    protected $AnggotaModel;
    protected $BeritaModel;
    function __construct()
    {
        $this->view = 'Modules\dashboard\Views';
        $this->ionAuth = new \IonAuth\Libraries\IonAuth();
        $this->BanerModel = new \Modules\dashboard\Models\ModelBaner();
        $this->KontakAlamatModel = new \Modules\dashboard\Models\ModelKontakAlamat();
        $this->OrganisasiModel = new \Modules\dashboard\Models\ModelOrganisasi();
        $this->KepengurusanModel = new \Modules\dashboard\Models\ModelKepengurusan();
        $this->AnggotaModel = new \Modules\dashboard\Models\ModelAnggota();
        $this->BeritaModel = new \Modules\dashboard\Models\ModelBerita();
    }

    public function rander($html)
    {
        $data['html'] = $html;
        $data['logo'] = $this->OrganisasiModel->find(1)['logo'];
        echo view($this->view . '\index', $data);
    }

    public function index()
    {
        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('/auth/login');
        }
        $this->rander(view("$this->view\dashboard"));
    }

    public function modal($title, $isi, $aksi, $warna, $tombol, $size = NULL)
    {
        $html = '<div class="modal-dialog ' . $size . ' modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">' . $title . '</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">' .
            $isi
            . '</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button onclick="' . $aksi . '" type="button" data-bs-dismiss="modal" class="btn btn-' . $warna . '">' . $tombol . '</button>
            </div>
        </div>
    </div>';
        return $html;
    }
}
