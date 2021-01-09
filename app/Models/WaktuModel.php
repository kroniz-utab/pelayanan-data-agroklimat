<?php

namespace App\Models;

use CodeIgniter\Model;

class WaktuModel extends Model
{
    protected $table = 'waktu';

    protected $allowedFields = ['minggu', 'tanggal'];
}
