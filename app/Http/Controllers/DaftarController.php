<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;
use App\Models\Product;


class DaftarController extends Controller
{
    public function registrasi($id)
    {
        $list_produk = Product::find($id);
        $produk = $id;
        return view('produk.formregistrasi', compact('list_produk', 'produk'));
    }

    public function kegiatanIndex()
    {
        $daftar = Daftar::all();
        return view('produk.kegiatanku', compact('daftar'));
    }


    public function kegiatan($id, Request $request)
    {
        $daftar = Daftar::create([
            'id_user' => $id,
            'namaproduct' => $request['namaproduct'],
            'jenisproduct' => $request['jenisproduct'],
            'penyelenggara' => $request['penyelenggara'],
            'desc' => $request['desc'],
            'kuota' => $request['kuota'],
            'tanggal' => $request['tanggal'],
            'lokasi' => $request['lokasi'],
            'name' => $request['name'],
            'no_telp' => $request['no_telp'],
            'email' => $request['email'],
            'alasan' => $request['alasan'],
            'status' => $request['status'],
        ]);
        return view('produk.index', compact('daftar'));
    }

    

    
}
