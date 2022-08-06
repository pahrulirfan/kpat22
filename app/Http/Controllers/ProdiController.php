<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $nama = 'ILKOM';

        $prodis = [
            'ilkom', 'ti', 'rpl', 'hukum'
        ];
        return view('prodi/index', compact('nama', 'prodis'));
    }

    function show(){
        // untuk detail prodi
        return view('prodi.show');
    }
}
