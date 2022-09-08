<?php

namespace App\Controllers;

use App\Models\SuratKeluarModels;
use App\Models\SuratMasukModels;
use App\Models\SuratTugasModels;

class SuratKeluar extends BaseController
{
    protected $SuratMasukModels;
    protected $SuratKeluarModels;
    protected $SuratTugasModels;

    public function __construct()
    {
        $this->SuratKeluarModels = new SuratKeluarModels();
        $this->SuratMasukModels = new SuratMasukModels();
        $this->SuratTugasModels = new SuratTugasModels();
    }
    public function index()
    {
        $data = [
            'title' => 'SISUAR',
            'suratkeluar' => $this->SuratKeluarModels->findAll(),
            'jumlahSuratMasuk' => $this->SuratMasukModels->hitungSuratMasuk(),
            'jumlahSuratKeluar' => $this->SuratKeluarModels->hitungSuratKeluar(),
            'jumlahSuratTugas' => $this->SuratTugasModels->hitungSuratTugas()
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

    public function hapusSuratKeluar()
    {
        helper(['form', 'url']);
        $id = $this->request->uri->getSegment(2);
        $this->SuratKeluarModels->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus');
        return redirect()->to(base_url('/SuratKeluar'));
    }
}
