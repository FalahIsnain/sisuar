<?php

namespace App\Controllers;

use App\Models\SuratKeluarModels;

class SuratKeluar extends BaseController
{
    protected $SuratKeluarModels;

    public function __construct()
    {
        $this->SuratKeluarModels = new SuratKeluarModels();
    }
    public function index()
    {
        $data = [
            'title' => 'SISUAR',
            'suratkeluar' => $this->SuratKeluarModels->findAll()

        ];
        return view('surat/suratkeluar/indexsuratkeluar.php', $data);
    }
    public function tambahSuratKeluar()
    {
        $dataSuratKeluar = [
            'no_surat' => $this->request->getVar('no_surat'),
            'asal_surat' => $this->request->getVar('asal_surat'),
            'tujuan_surat' => $this->request->getVar('tujuan_surat'),
            'perihal' => $this->request->getVar('perihal'),
            'tanggal_keluar' => $this->request->getVar('tanggal_keluar'),
            // 'ket_surat' => $this->request->getVar('ket_surat'),
            'ket_surat' => '-',

            'file' => '-',
        ];
        $this->SuratKeluarModels->save($dataSuratKeluar);
        return redirect()->to(base_url('/SuratKeluar'));
    }
}
