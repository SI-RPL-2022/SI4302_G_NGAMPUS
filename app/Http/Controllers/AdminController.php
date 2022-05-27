<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kampus;

class AdminController extends Controller
{
    //
    public function indexKampus () {
        $kampuses = kampus::all();
        $jumlah = $kampuses->count();

        return view('admin.indexKampus', compact('kampuses', 'jumlah'));
    }

    public function createKampus () {
        return view('admin.createKampus');
    }

    public function storeKampus(Request $request)
    {
        $request->validate([
            'nama_kampus'  => 'required',
            'desc_kampus'  => 'required',
            'biaya'  => 'required',
            'fakultas1'  => 'required',
            'jurusan1'  => 'required',
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/Kampus/'), $pictureName);

        $kampus = kampus::create([
            'nama_kampus' => $request['nama_kampus'],
            'desc_kampus' => $request['desc_kampus'],
            'biaya' => $request['biaya'],
            'fakultas1' => $request['fakultas1'],
            'jurusan1' => $request['jurusan1'],
            'fakultas2' => $request['fakultas2'],
            'jurusan2' => $request['jurusan2'],
            'fakultas3' => $request['fakultas3'],
            'jurusan3' => $request['jurusan3'],
            'fakultas4' => $request['fakultas4'],
            'jurusan4' => $request['jurusan4'],
            'picture' => $pictureName,
        ]);
        return redirect('admin/kampus');
    }

    public function destroyKampus($id)
    {
        $kampus = kampus::find($id);
        $kampus->delete();
        return redirect('/admin/kampus');
    }
}
