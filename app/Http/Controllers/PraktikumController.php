<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PraktikumController extends Controller
{
    public function index()
    {
        return view('praktikum.index');
    }

    public function kpat()
    {
        return view('praktikum.kpat');
    }
}
