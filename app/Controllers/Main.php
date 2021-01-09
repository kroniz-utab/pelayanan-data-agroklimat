<?php

namespace App\Controllers;

use App\Models\EntryModel;

class Main extends BaseController
{
    // public function coba_duls()
    // {
    //     $entry = $this->db->query('SELECT * FROM entry')->getResultArray();
    //     $entry = $this->entryModel->findAll();
    //     dd($entry);
    // }
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
        $qr = 'SELECT id, nama FROM stasiun ORDER BY nama ASC';
        $stas = $this->db->query($qr)->getResultArray();

        $data = [
            'title' => 'Monitor Data',
            'cat' => 3,
            'stas' => $stas,
            'validation' => \Config\Services::validation()
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


    public function getForm()
    {
        if (!$this->validate([
            'stasiun' => 'required|numeric',
            'periode' => 'required|numeric',
            'minggu' => 'required|numeric',
            'jpeng' => 'required|numeric'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/input')->withInput()->with('validation', $validation);
        }

        $stas = $this->request->getVar('stasiun');
        $period = $this->request->getVar('periode');
        $minggu = $this->request->getVar('minggu');
        $jpeng = $this->request->getVar('jpeng');

        // $tanggal = $this->waktuModel->where('minggu', $minggu)->findAll();
        $tgl_qr = 'SELECT tanggal from waktu where minggu = ? order by tanggal ASC';
        $tanggal = $this->db->query($tgl_qr, $minggu)->getResultArray();
        // dd($tanggal);


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
            'ext2' => $ext2,
            'validation' => \Config\Services::validation()
        ];
        // dd($data);
        return view('pages/form', $data);
    }

    public function saveForm()
    {
        // validasi form
        if (!$this->validate([
            'bk' => 'required|numeric',
            'bb' => 'required|numeric',
            'tl' => 'required|numeric',
            'wd' => 'required|numeric',
            'ws' => 'required|numeric',
            'ln' => 'required|numeric',
            'ext1' => 'required|numeric',
            'ext2' => 'required|numeric',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/input/get-form')->withInput()->with('validation', $validation);
        }

        // mengambil seluruh variable yang ada di form
        $dt['staid'] = $this->request->getVar('staid');
        $dt['period'] = $this->request->getVar('period');
        $dt['minggu'] = $this->request->getVar('minggu');
        $dt['tanggal'] = $this->request->getVar('tanggal');
        $dt['jpeng'] = $this->request->getVar('jpeng');
        $dt['bk'] = $this->request->getVar('bk');
        $dt['bb'] = $this->request->getVar('bb');
        $dt['tl'] = $this->request->getVar('tl');
        $dt['wd'] = $this->request->getVar('wd');
        $dt['ws'] = $this->request->getVar('ws');
        $dt['wsr'] = $this->request->getVar('wsr');
        $dt['ln'] = $this->request->getVar('ln');
        $dt['ext1'] = $this->request->getVar('ext1');
        $dt['ext2'] = $this->request->getVar('ext2');

        if ($dt['jpeng'] == 1) {
            $target = 'entry1id';
        } elseif ($dt['jpeng'] == 2) {
            $target = 'entry2id';
        } else {
            $target = 'entry3id';
        }

        // DATA CHECKER
        $qr = 'SELECT id from utama where staid = ? and period = ? and no_ming = ? and tanggal = ?';
        $result = $this->db->query($qr, [$dt['staid'], $dt['period'], $dt['minggu'], $dt['tanggal']])->getResultArray();

        if ($result == null) {
            // Data dalam kondisi kosong, maka harus mengyimpannya ke database
            // membuat data pada tabel entry
            $this->entryModel->save([
                'bb' => $dt['bb'],
                'bk' => $dt['bk'],
                'tl' => $dt['tl'],
                'ln' => $dt['ln'],
                'wd' => $dt['wd'],
                'ws' => $dt['ws'],
                'ws_rate' => $dt['wsr'],
                'ext1' => $dt['ext1'],
                'ext2' => $dt['ext2'],
            ]);

            // mendapatkan id data yang baru saja di input
            $qrid = 'SELECT id from entry order by id desc limit 1';
            $id_ent = $this->db->query($qrid)->getResultArray();

            // membuat data pada tabel utama
            $this->mainModel->save([
                'staid' => $dt['staid'],
                'period' => $dt['period'],
                'no_ming' => $dt['minggu'],
                'tanggal' => $dt['tanggal'],
                'entry1id' => 1,
                'entry2id' => 1,
                'entry3id' => 1
            ]);

            // mendapatkan id data yang ingin di input di tabel utama
            $utmqr = 'SELECT id from utama where staid = ? and period = ? and no_ming = ? and tanggal = ?';
            $id_utm = $this->db->query($utmqr, [$dt['staid'], $dt['period'], $dt['minggu'], $dt['tanggal']])->getResultArray();

            // mengupdate data yang sesuai dengan target
            $this->mainModel->save([
                'id' => $id_utm[0]['id'],
                $target => $id_ent[0]['id']
            ]);
        } else {
            // Data sudah ada, maka harus mengedit dari data yang sudah ada
            // membuat data baru pada tabel entry
            $this->entryModel->save([
                'bb' => $dt['bb'],
                'bk' => $dt['bk'],
                'tl' => $dt['tl'],
                'ln' => $dt['ln'],
                'wd' => $dt['wd'],
                'ws' => $dt['ws'],
                'ws_rate' => $dt['wsr'],
                'ext1' => $dt['ext1'],
                'ext2' => $dt['ext2'],
            ]);

            // mendapatkan id data yang baru saja di input
            $qrid = 'SELECT id from entry order by id desc limit 1';
            $id_ent = $this->db->query($qrid)->getResultArray();

            // mendapatkan id data yang ingin di input di tabel utama    
            $utmqr = 'SELECT id from utama where staid = ? and period = ? and no_ming = ? and tanggal = ?';
            $id_utm = $this->db->query($utmqr, [$dt['staid'], $dt['period'], $dt['minggu'], $dt['tanggal']])->getResultArray();

            // mengupdate data yang sesuai dengan target
            $this->mainModel->save([
                'id' => $id_utm[0]['id'],
                $target => $id_ent[0]['id']
            ]);
        }
        return redirect()->to('/input');
    }

    public function watch()
    {
        if (!$this->validate([
            'stasiun' => 'required|numeric',
            'periode' => 'required|numeric',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/monitor')->withInput()->with('validation', $validation);
        }

        $staid = $this->request->getVar('stasiun');
        $period = $this->request->getVar('periode');

        $stadata = $this->stasiunModel->find($staid);

        $dt_qr = 'SELECT * from utama where staid = ? and period = ?';
        $dt = $this->db->query($dt_qr, [$staid, $period])->getResultArray();
        // $total = sizeof($dt);
        // dd($total);

        $roman = ['I', 'II', 'III', 'IV', 'V'];
        $pro = $roman[$period - 1];

        $dtperming = [];
        for ($i = 1; $i < 53; $i++) {
            $query_ming = 'SELECT * from utama where staid = ? and period = ? and no_ming = ?';
            $dt_ming = $this->db->query($query_ming, [$staid, $period, $i])->getResultArray();
            $tot = sizeof($dt_ming);
            array_push($dtperming, $tot);
        }
        // dd($dtperming);

        $data = [
            'title' => 'Monitor Data',
            'cat' => 3,
            'staid' => $staid,
            'stadata' => $stadata,
            // 'data_utama' => $dt,
            'period' => $pro,
            'per' => $period,
            'dttot' => $dtperming
        ];
        return view('pages/list', $data);
    }

    public function detail($staid, $period, $minggu)
    {
        $data_utama = $this->mainModel->where([
            'staid' => $staid,
            'period' => $period,
            'no_ming' => $minggu
        ])->findAll();

        $stadata = $this->stasiunModel->where(['id' => $staid])->findAll();

        $hari = $this->waktuModel->where([
            'minggu' => $minggu
        ])->findAll();

        $dt_entry1 = [];
        $dt_entry2 = [];
        $dt_entry3 = [];

        foreach ($data_utama as $du) {
            $entry1 = $this->entryModel->where([
                'id' => $du['entry1id']
            ])->findAll();
            array_push($dt_entry1, $entry1[0]);

            $entry2 = $this->entryModel->where([
                'id' => $du['entry2id']
            ])->findAll();
            array_push($dt_entry2, $entry2[0]);

            $entry3 = $this->entryModel->where([
                'id' => $du['entry3id']
            ])->findAll();
            array_push($dt_entry3, $entry3[0]);
        }
        // dd($dt_entry1);
        // foreach ($data_utama as $dtu) {
        //     if ($dtu['tanggal'] == '1') {
        //         $entry1id = $dtu['entry1id'];
        //         $entry2id = $dtu['entry2id'];
        //         $entry3id = $dtu['entry3id'];
        //     }
        //     dd($entry1id);
        // }
        // die();

        $roman = ['I', 'II', 'III', 'IV', 'V'];
        $pro = $roman[$period - 1];

        $data = [
            'title' => 'Monitor Data',
            'cat' => 3,
            'stadata' => $stadata[0],
            'hari' => $hari,
            'entry1' => $dt_entry1,
            'entry2' => $dt_entry2,
            'entry3' => $dt_entry3,
            'dt_utama' => $data_utama,
            'pro' => $pro,
            'minggu' => $minggu
        ];
        return view('pages/detail', $data);
    }
    //--------------------------------------------------------------------
}
