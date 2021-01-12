<?php

namespace App\Models;

use CodeIgniter\Model;

class DynamicModel extends Model
{
    public function getDataTgl($ming)
    {
        return $this->dynamicModel->getWhere('waktu', ['minggu' => $ming])->getResult();
    }
}
