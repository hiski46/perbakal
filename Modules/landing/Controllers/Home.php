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
        return view("$this->homeView\home");
    }
}
