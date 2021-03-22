<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Data Mahasiswa";
        $data['mahasiswa'] = array(
            'nim' => '1915101048',
            'nama' => 'Putu Bagus Angga Darmawan'

        );
        $data['user'] = '';
        return view('admin.beranda', compact('title', 'data'));
    }
}
