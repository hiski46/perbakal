<?php

namespace Modules\dashboard\Models;

use CodeIgniter\Model;

class ModelKontakAlamat extends Model
{
    protected $table = 'kontak_alamat';

    protected $allowedFields = ['alamat', 'telepon', 'email', 'facebook', 'youtube', 'instagram'];
}
