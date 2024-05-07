<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index()
    {
        return view("halaman/index");
    }

    function tentang()
    {
        $judul = 'Halaman Tentang';
        return view("halaman/tentang")->with('halaman_judul', $judul);
    }

    function kontak()
    {
        $data = [
            'judul' => 'Halaman Kontak',
            'kontak' =>[
                'email' => 'haidir@gmail.com',
                'WA' => '08080808'
            ]
        ];
        return view("halaman/kontak")->with($data);
    }
}
