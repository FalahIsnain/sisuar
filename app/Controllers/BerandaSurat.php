<?php

namespace App\Controllers;

use App\Models\SuratKeluarModels;
use App\Models\SuratMasukModels;


class BerandaSurat extends BaseController
{
    protected $SuratKeluarModels;

    public function __construct()
    {
        $this->SuratKeluarModels = new SuratKeluarModels();
        $this->SuratMasukModels = new SuratMasukModels();
    }
    public function index()
    {
        $data = [
            'title' => 'SISUAR',
            'suratmasuk' => $this->SuratMasukModels->findAll(),
            'suratkeluar' => $this->SuratKeluarModels->findAll(),
            'jumlahSuratMasuk' => $this->SuratMasukModels->hitungSuratMasuk(),
            'jumlahSuratKeluar' => $this->SuratKeluarModels->hitungSuratKeluar()
        ];

        return view('surat/dashboardsurat.php', $data);
    }
}
