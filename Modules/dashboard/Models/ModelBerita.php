<?php

namespace Modules\dashboard\Models;

use CodeIgniter\Model;

class ModelBerita extends Model
{
    protected $table = 'berita';

    protected $allowedFields = ['judul', 'penulis', 'thumbnail', 'isi', 'create_at', 'type'];
}
