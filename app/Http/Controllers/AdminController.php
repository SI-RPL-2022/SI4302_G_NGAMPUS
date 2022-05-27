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
            'fakultas2'  => 'required',
            'jurusan2'  => 'required',
            'fakultas3'  => 'required',
            'jurusan3'  => 'required',
            'fakultas4'  => 'required',
            'jurusan4'  => 'required',
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = \Str::slug($request->nama_kampus) . '.' . $request->picture->extension();
        $request->picture->move(public_path('Admin/img/Kampus/'), $pictureName);

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

    public function editKampus ($id) {
        $kampuses = kampus::find($id);
        return view('admin.editKampus', compact('kampuses'));
    }

    public function updateKampus(Request $request, $id)
    {
        $request->validate([
            'nama_kampus'  => 'required',
            'desc_kampus'  => 'required',
            'biaya'  => 'required',
            'fakultas1'  => 'required',
            'jurusan1'  => 'required',
            'fakultas2'  => 'required',
            'jurusan2'  => 'required',
            'fakultas3'  => 'required',
            'jurusan3'  => 'required',
            'fakultas4'  => 'required',
            'jurusan4'  => 'required',
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = \Str::slug($request->nama_kampus) . '.' . $request->picture->extension();
        $request->picture->move(public_path('Admin/img/Kampus/'), $pictureName);

        $kampus = kampus::find($id);
        $kampus->nama_kampus = $request->nama_kampus;
        $kampus->desc_kampus = $request->desc_kampus;
        $kampus->biaya = $request->biaya;
        $kampus->fakultas1 = $request->fakultas1;
        $kampus->jurusan1 = $request->jurusan1;
        $kampus->fakultas2 = $request->fakultas2;
        $kampus->jurusan2 = $request->jurusan2;
        $kampus->fakultas3 = $request->fakultas3;
        $kampus->jurusan3 = $request->jurusan3;
        $kampus->fakultas4 = $request->fakultas4;
        $kampus->jurusan4 = $request->jurusan4;
        $kampus->picture = $pictureName;
        $kampus->save();
            
        return redirect('admin/kampus');
    }

    public function destroyKampus($id)
    {
        $kampus = kampus::find($id);
        $kampus->delete();
        return redirect('/admin/kampus');
    }
}
