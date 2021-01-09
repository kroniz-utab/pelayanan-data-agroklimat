<?php

namespace App\Models;

use CodeIgniter\Model;

class UtamaModel extends Model
{
    protected $table = 'utama';

    protected $allowedFields = ['staid', 'period', 'no_ming', 'tanggal', 'entry1id', 'entry2id', 'entry3id'];
}
