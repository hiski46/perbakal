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

    public function baner()
    {
        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('/auth/login');
        }
        $this->rander(view("$this->view\content\baner"));
    }
}
