<?php

namespace Modules\dashboard\Controllers;

use App\Controllers\BaseController;



class Dashboard extends BaseController
{
    protected $ionAuth;
    protected $view;
    function __construct()
    {
        $this->view = 'Modules\dashboard\Views';
        $this->ionAuth = new \IonAuth\Libraries\IonAuth();
    }

    public function rander($html)
    {
        $data['html'] = $html;
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
        $html = '<div class="modal-dialog ' . $size . '">
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
                <button onclick="' . $aksi . '" type="button" class="btn btn-' . $warna . '">' . $tombol . '</button>
            </div>
        </div>
    </div>';
        return $html;
    }
}
