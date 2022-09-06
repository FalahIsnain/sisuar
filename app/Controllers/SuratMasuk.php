<?php

namespace App\Controllers;

class SuratMasuk extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SISUAR',
            'konten' => 'Selamat datang di beranda'
        ];
        return view('surat/suratmasuk/indexsuratmasuk.php', $data);
    }
}
