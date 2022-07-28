<?php

namespace Modules\dashboard\Models;

use CodeIgniter\Model;

class ModelKepengurusan extends Model
{
    protected $table = 'kepengurusan';

    protected $allowedFields = ['jabatan', 'type'];
}
