<?php

namespace Modules\dashboard\Models;

use CodeIgniter\Model;

class ModelAnggota extends Model
{
    protected $table = 'anggota';

    protected $allowedFields = ['nama', 'kepengurusan', 'jabatan', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'medsos', 'foto'];
}
