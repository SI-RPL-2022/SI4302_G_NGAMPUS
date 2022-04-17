<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kampus;
use App\Models\Jurusan;

class ArtikelController extends Controller
{
    public function index()
    {
        $jurusan=Jurusan::all();
        $kampus=Kampus::all();
        return view('artikel.index', compact('jurusan', 'kampus'));
    }

    public function indexKampus($id)
    {
        
        $data_kampus = Kampus::find($id);
        $nama_kampus = $id;
        
        return view('artikel.infokampus', compact('data_kampus', 'nama_kampus'));
    }

    public function indexJurusan($id)
    {
        
        $data_jurusan = Jurusan::find($id);
        $nama_jurusan = $id;
        
        return view('artikel.infojurusan', compact('data_jurusan', 'nama_jurusan'));
    }



}



