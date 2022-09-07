<?php

namespace App\Controllers;

use App\Models\SuratMasukModels;

class SuratMasuk extends BaseController
{
    protected $SuratMasukModels;

    public function __construct()
    {
        $this->SuratMasukModels = new SuratMasukModels();
    }

    public function index()
    {
        $data = [
            'title' => 'SISUAR',
            'suratmasuk' => $this->SuratMasukModels->findAll()
        ];
        return view('surat/suratmasuk/indexsuratmasuk.php', $data);
    }
}
