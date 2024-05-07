<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index()
    {
        return '<h1>Siswa Dari Controller</h1>';
    }

    function detail($id)
    {
        return "<h1>Siswa Dari Controller Dengan ID $id</h1>";
    }

    function info($id, $nama)
    {
        return "<h1>Siswa Dari Controller Dengan ID $id dan Nama $nama</h1>";
    }
}
