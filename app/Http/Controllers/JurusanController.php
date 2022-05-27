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

        $Jurusan->nama_jurusan = $request->namajurusan;
        $Jurusan->desc_jurusan = $request->desc_jurusan;
        $Jurusan->alasan1 = $request->alasan1;
        $Jurusan->alasan2 = $request->alasan2;
        $Jurusan->alasan3 = $request->alasan3;
        $Jurusan->alasan4 = $request->alasan4;
        $Jurusan->prospek1 = $request->prospek1;
        $Jurusan->prospek2 = $request->prospek2;
        $Jurusan->prospek3 = $request->prospek3;
        $Jurusan->prospek4 = $request->prospek4;
        $Jurusan->prospek5 = $request->prospek5;
        $Jurusan->prospek6 = $request->prospek6;
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
