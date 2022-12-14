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
            'suratMasukWrn'=>'#F6F3A7',
            'suratKeluarWrn'=>'#F6C523',
            'suratTugasWrn'=>'#228C7B',
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

        $file = $this->request->getFile('file');
        $namaFile = $file->getName();
        $file->move('asset/pdf', $namaFile);
        $dataSuratKeluar = [
            'no_surat' => $this->request->getVar('no_surat'),
            'tujuan_surat' => $this->request->getVar('tujuan_surat'),
            'perihal' => $this->request->getVar('perihal'),
            'tanggal_keluar' => $this->request->getVar('tanggal_keluar'),
            'isi_ringkas' => $this->request->getVar('isi_ringkas'),
            'jenis_surat' => 'Keluar',
            'file' => $namaFile,
        ];
        $this->SuratKeluarModels->save($dataSuratKeluar);
        return redirect()->to(base_url('/SuratKeluar'));
    }

    public function hapusSuratKeluar()
    {
        helper(['form', 'url']);
        $id = $this->request->uri->getSegment(2);
        //Cari File berdasarkan Id
        $hapusFile = $this->SuratKeluarModels->find($id);

        // Hapus file
        unlink('asset/pdf/' . $hapusFile['file']);
        $this->SuratKeluarModels->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus');
        return redirect()->to(base_url('/SuratKeluar'));
    }

    public function edit($id_surat)
    {
        $file = $this->request->getFile('file');
        if ($file->getError() == 4) {
            $namaFile = $this->request->getVar('fileLama');
        } else {
            $namaFile = $file->getName();
            $file->move('asset/pdf', $namaFile);
            unlink('asset/pdf/' . $this->request->getVar('fileLama'));
        }
        $this->SuratKeluarModels->update($id_surat, [
            'no_surat' => $this->request->getVar('no_surat'),
            'tujuan_surat' => $this->request->getVar('tujuan_surat'),
            'perihal' => $this->request->getVar('perihal'),
            'tanggal_keluar' => $this->request->getVar('tanggal_keluar'),
            'isi_ringkas' => $this->request->getVar('isi_ringkas'),
            'jenis_surat' => 'Keluar',
            'file' => $namaFile,
        ]);


        return redirect()->to(base_url('/SuratKeluar'));
    }


    public function formfilter()
    {

        helper(['form', 'url']);
        $data = [
            'title' => 'SISUAR',
            'jumlahSuratMasuk' => $this->SuratMasukModels->hitungSuratMasuk(),
            'jumlahSuratKeluar' => $this->SuratKeluarModels->hitungSuratKeluar(),
            'jumlahSuratTugas' => $this->SuratTugasModels->hitungSuratTugas(),
            'validation' => \Config\Services::validation(),

        ];
        return view('surat/suratkeluar/filtersuratkeluar.php', $data);
    }

    public function cetakFilterSuratKeluar()
    {
        $tglmin = $this->request->getPost('tanggal_min');
        $tglmax = $this->request->getPost('tanggal_max');
        $data = [
            'title' => 'Filter Surat Keluar',
            'dataFilter' => $this->SuratKeluarModels->filterDate($tglmin, $tglmax),
            'tanggalMin' => date('d-M-Y', strtotime($tglmin)),
            'tanggalMax' => date('d-M-Y', strtotime($tglmax)),
            'jumlahSuratMasuk' => $this->SuratMasukModels->hitungSuratMasuk(),
            'jumlahSuratKeluar' => $this->SuratKeluarModels->hitungSuratKeluar(),
            'jumlahSuratTugas' => $this->SuratTugasModels->hitungSuratTugas(),
        ];
        return view('surat/suratkeluar/cetakfiltersuratkeluar.php', $data);
    }
}
