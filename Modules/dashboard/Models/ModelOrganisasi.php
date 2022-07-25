<?php

namespace Modules\dashboard\Models;

use CodeIgniter\Model;

class ModelOrganisasi extends Model
{
    protected $table = 'organisasi';

    protected $allowedFields = ['logo', 'visi', 'misi', 'tentang'];
}
