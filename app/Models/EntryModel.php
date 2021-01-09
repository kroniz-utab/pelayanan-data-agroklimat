<?php

namespace App\Models;

use CodeIgniter\Model;

class EntryModel extends Model
{
    protected $table = 'entry';

    protected $allowedFields = ['bb', 'bk', 'tl', 'ln', 'wd', 'ws', 'ws_rate', 'ext1', 'ext2'];
}
