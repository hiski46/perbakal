<?php

namespace Modules\dashboard\Models;

use CodeIgniter\Model;

class ModelBaner extends Model
{
    protected $table = 'baner';

    protected $allowedFields = ['gambar', 'text', 'body'];
}
