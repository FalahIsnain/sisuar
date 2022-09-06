<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SISUAR',
            'konten' => 'ini halaman home'
        ];
        return view('home', $data);
    }
}
