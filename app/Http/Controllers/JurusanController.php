<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jurusan;

class JurusanController extends Controller
{
    //
    public function jurusanAdmin () {
        $jurusans = jurusan::all();
        $jumlah = $jurusans->count();

        return view('adminjurusan.index', compact('jurusans', 'jumlah'));
    }

    public function create () {
        return view('adminjurusan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jurusan'  => 'required',
            'desc_jurusan'  => 'required',
            'alasan1'  => 'required',
            'alasan2'  => 'required',
            'alasan3'  => 'required',
            'alasan4'  => 'required',
            'prospek1'  => 'required',
            'prospek2'  => 'required',
            'prospek3'  => 'required',
            'prospek4'  => 'required',
            'prospek5'  => 'required',
            'prospek6'  => 'required',
        ]);


        $jurusan = jurusan::create([
            'nama_jurusan' => $request['nama_jurusan'],
            'desc_jurusan' => $request['desc_jurusan'],
            'alasan1' => $request['alasan1'],
            'alasan2' => $request['alasan2'],
            'alasan3' => $request['alasan3'],
            'alasan4' => $request['alasan4'],
            'prospek1' => $request['prospek1'],
            'prospek2' => $request['prospek2'],
            'prospek3' => $request['prospek3'],
            'prospek4' => $request['prospek4'],
            'prospek5' => $request['prospek5'],
            'prospek6' => $request['prospek6'],
        ]);
        return redirect('admin/jurusan');
    }

    public function edit ($id) {
        $jurusans = jurusan::find($id);
        return view('adminjurusan.edit', compact('jurusans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jurusan'  => 'required',
            'desc_jurusan'  => 'required',
            'alasan1'  => 'required',
            'alasan2'  => 'required',
            'alasan3'  => 'required',
            'alasan4'  => 'required',
            'prospek1'  => 'required',
            'prospek2'  => 'required',
            'prospek3'  => 'required',
            'prospek4'  => 'required',
            'prospek5'  => 'required',
            'prospek6'  => 'required',
        ]);


        $jurusan = jurusan::find($id);
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->desc_jurusan = $request->desc_jurusan;
        $jurusan->alasan1 = $request->alasan1;
        $jurusan->alasan2 = $request->alasan2;
        $jurusan->alasan3 = $request->alasan3;
        $jurusan->alasan4 = $request->alasan4;
        $jurusan->prospek1 = $request->prospek1;
        $jurusan->prospek2 = $request->prospek2;
        $jurusan->prospek3 = $request->prospek3;
        $jurusan->prospek4 = $request->prospek4;
        $jurusan->prospek5 = $request->prospek5;
        $jurusan->prospek6 = $request->prospek6;
        $jurusan->save();
            
        return redirect('admin/jurusan');
    }

    public function destroy($id)
    {
        $jurusan = jurusan::find($id);
        $jurusan->delete();
        return redirect('/admin/jurusan');
    }
}
