<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        // echo 'data semua prodi';
        $nama = 'ILKOM';

        $prodis = [
            'ilkom', 'ti', 'rpl', 'hukum'
        ];
        return view('prodi/index', compact('nama', 'prodis'));
    }

    function show(){
        return view('prodi.show');
    }
}
