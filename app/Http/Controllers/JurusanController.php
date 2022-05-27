<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function jurusanAdmin ()
    {
        $jurusan=Jurusan::all();
    return view('adminjurusan.index', compact('jurusan'));
    }
    

    // public function __construct()
    // {
    //     $this->middleware('is_admin');
    // }
    
    public function create()
    {
        return view('adminjurusan.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/Admin/img'), $pictureName);

        $Jurusan = Jurusan::create([
            'namajurusan' => $request['namajurusan'],
            'detailjurusan' => $request['detailjurusan'],
            'alasanmemilihjurusan' => $request['alasanmemilihjurusan'],
            'prospekkerja' => $request['prospekkerja'],
            'testimoni' => $request['testimoni'],
            'picture' => $pictureName,
        ]);
        return redirect('admin/jurusan');
    }
    public function edit($id)
    {
        $jurusan = jurusan::find($id);
        return view('adminjurusan.edit', compact('jurusan'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/Admin/img'), $pictureName);
        $Jurusan = Jurusan::find($id);

        $Jurusan->namajurusna = $request->namajurusan;
        $Jurusan->detailjurusan = $request->detailjurusan;
        $Jurusan->alasanmemilihjurusan = $request->alasanmemilihjurusan;
        $Jurusan->prospekkerja = $request->prospekkerja;
        $Jurusan->testimoni = $request->testimoni;
        $Jurusan->picture = $pictureName;
        $Jurusan->save();
        return redirect('/admin/jurusan');
    }
    public function destroy($id)
    {
        $Jurusan = Jurusan::find($id);
        $Jurusan->delete();
        return redirect('/admin/jurusan');
    }
}
