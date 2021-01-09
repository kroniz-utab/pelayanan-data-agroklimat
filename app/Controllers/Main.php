<?php

namespace App\Controllers;

use App\Models\EntryModel;

class Main extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Selamat Datang!',
            'cat' => 1
        ];
        return view('pages/home', $data);
    }

    public function input()
    {
        $qr = 'SELECT id, nama FROM stasiun ORDER BY nama ASC';
        $stas = $this->db->query($qr)->getResultArray();
        $data = [
            'title' => 'Input Data',
            'cat' => 2,
            'stas' => $stas,
            'validation' => \Config\Services::validation()
        ];
        return view('pages/input', $data);
    }

    public function monitor()
    {

        $data = [
            'title' => 'Monitor Data',
            'cat' => 3
        ];
        return view('pages/monitor', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us',
            'cat' => 4
        ];
        return view('pages/about', $data);
    }

    // public function coba_duls()
    // {
    //     $entry = $this->db->query('SELECT * FROM entry')->getResultArray();
    //     $entry = $this->entryModel->findAll();
    //     dd($entry);
    // }

    public function getForm()
    {
        if (!$this->validate([
            'stasiun' => 'required|numeric',
            'periode' => 'required|numeric',
            'minggu' => 'required|numeric',
            'tanggal' => 'required|numeric',
            'jpeng' => 'required|numeric'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/input')->withInput()->with('validation', $validation);
        }

        $stas = $this->request->getVar('stasiun');
        $period = $this->request->getVar('periode');
        $minggu = $this->request->getVar('minggu');
        $tanggal = $this->request->getVar('tanggal');
        $jpeng = $this->request->getVar('jpeng');

        $namstas = $this->stasiunModel->find($stas);
        $roman = ['I', 'II', 'III', 'IV', 'V'];
        $jam = ['07.00 WS', '14.00 WS', '18.00 WS'];
        $pro = $roman[$period - 1];
        $jampeng = $jam[$jpeng - 1];

        if ($jpeng == 1) {
            $tl = 'Min Rumput';
            $ext1 = 'Solar Radiation';
            $ext2 = 'Curah Hujan';
        } elseif ($jpeng == 2) {
            $tl = 'Temp Min';
            $ext1 = 'Uji Peramatan BK';
            $ext2 = 'Uji Peramatan Min';
        } else {
            $tl = 'Temp Max';
            $ext1 = 'Uji Peramatan BK';
            $ext2 = 'Uji Peramatan Max';
        }

        $data = [
            'title' => 'Input Data',
            'cat' => 2,
            'stas' => $stas,
            'name' => $namstas['nama'],
            'period' => $period,
            'minggu' => $minggu,
            'tanggal' => $tanggal,
            'jpeng' => $jpeng,
            'proman' => $pro,
            'jampeng' => $jampeng,
            'tl' => $tl,
            'ext1' => $ext1,
            'ext2' => $ext2
        ];
        // dd($data);
        return view('pages/form', $data);
    }

    //--------------------------------------------------------------------

}
