<?php

namespace App\Controllers;

use App\Models\SuratKeluarModels;
use App\Models\SuratMasukModels;
use App\Models\SuratTugasModels;

class SuratMasuk extends BaseController
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

        $id = $this->request->uri->getSegment(2);
        helper(['form', 'url']);
        $jumlahRecord = $this->SuratMasukModels->where('id_surat', $id)->countAllResults();

        $data = [
            'title' => 'SISUAR',
            'suratmasuk' => $this->SuratMasukModels->findAll(),
            'jumlahSuratMasuk' => $this->SuratMasukModels->hitungSuratMasuk(),
            'jumlahSuratKeluar' => $this->SuratKeluarModels->hitungSuratKeluar(),
            'jumlahSuratTugas' => $this->SuratTugasModels->hitungSuratTugas()
        ];
        $dataEdit = [
            'dataEdit' => $this->SuratMasukModels->getOne($id),

        ];


        return view('surat/suratmasuk/indexsuratmasuk.php', $data, $dataEdit);
    }

    public function tambahSuratMasuk()
    {
        $dataSuratMasuk = [
            'no_surat' => $this->request->getVar('no_surat'),
            'asal_surat' => $this->request->getVar('asal_surat'),
            'tujuan_surat' => $this->request->getVar('tujuan_surat'),
            'perihal' => $this->request->getVar('perihal'),
            'tanggal_masuk' => $this->request->getVar('tanggal_masuk'),
            'ket_surat' => $this->request->getVar('ket_surat'),
            'file' => '-',
        ];
        $this->SuratMasukModels->save($dataSuratMasuk);
        return redirect()->to(base_url('/SuratMasuk'));
    }

    public function hapusSuratMasuk()
    {
        helper(['form', 'url']);
        $id = $this->request->uri->getSegment(2);
        $this->SuratMasukModels->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus');
        return redirect()->to(base_url('/SuratMasuk'));
    }

    public function formEditSuratMasuk()
    {
        $id = $this->request->uri->getSegment(2);
        helper(['form', 'url']);
        $jumlahRecord = $this->SuratMasukModels->where('id_surat', $id)->countAllResults();

        if ($jumlahRecord == 1) {

            $dataEdit = [
                'dataEdit' => $this->SuratMasukModels->getOne($id),
                'title' => "form update data",
            ];
            dd($dataEdit);
            return view('/SuratMasuk', $dataEdit);
        } else {
            session()->setFlashdata('pesan', 'data tidak ada di database');
            return redirect()->to(base_url('/SuratMasuk'));
        }
    }
}
