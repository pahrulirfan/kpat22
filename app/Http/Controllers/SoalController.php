<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index()
    {
        $soals = Soal::with('user')->get();
        return view('soal.index', compact('soals'));
    }

    public function create()
    {
        return view('soal.add');
    }

    public function save(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required|min:5',
            'dosen' => 'required',
            'jumlah_soal' => 'required|integer',
            'keterangan' => 'required',
        ]);
        Soal::create($request->all());
        return redirect()->route('soal.index');
    }
}
