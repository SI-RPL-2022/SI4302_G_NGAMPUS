<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\kampus;

class KampusController extends Controller
{
    protected $namespace = 'App\Http\Controllers';

    public function index()
    {
        $data_kampus=kampus::all();
        return view('produk.infokampus', compact('data_jurusan'));
    }
}
