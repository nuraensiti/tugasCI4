<?php
namespace App\Controllers;

class Latihanpertama extends BaseController
{
    public function index()
    {
        echo "Selamat Datang di CodeIgniter 4";
    }

    public function lihat()
    {
        return view('latihan_pertama');
    }
    public function subdetail()
    {
        return view('detail/sub_latihan_pertama');
    }
}