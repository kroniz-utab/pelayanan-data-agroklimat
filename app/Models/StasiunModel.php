<?php

namespace App\Models;

use CodeIgniter\Model;

class StasiunModel extends Model
{
    protected $table = 'stasiun';

    protected $allowedFields = ['nama', 'lat', 'lon', 'alt'];
}
