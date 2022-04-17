<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\jurusan;

class JurusanController extends Controller
{
    protected $namespace = 'App\Http\Controllers';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_jurusan=jurusan::all();
        return view('produk.infojurusan', compact('data_jurusan'));
    }
}
