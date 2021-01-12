<?php
// define('BASEPATH ')
namespace App\Controllers;

use App\Models\DynamicModel;

class Dynamic extends BaseController
{
    private $model;

    public function __construct()
    {
        // parent::__construct();
        // $this->load->model('DynamicModel');
        $model = new DynamicModel();
    }

    public function fetch()
    {
        $ming = $this->request->getPost('id');
        $query = 'SELECT * from waktu where minggu = ?';
        $data = $this->db->query($query, $ming)->getResult();
        $tgl = [];
        $tgl[0] = '<option value="">--- Tanggal ---</option>';
        foreach ($data as $dt) {
            $out = '<option value="' . $dt->tanggal . '">' . $dt->tanggal . '</option>';
            array_push($tgl, $out);
        }
        return $this->response->setJSON($tgl);
    }
    //--------------------------------------------------------------------

}
