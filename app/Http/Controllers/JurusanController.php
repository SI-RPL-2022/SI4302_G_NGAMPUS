<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jurusan;

class JurusanController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }
    public function jurusanAdmin()
    {
        $search = request()->query('search');
        if ($search){
            $jurusan = Jurusan::where('name', 'like', "%{$search}%")->paginate(5);

        }
        else{
            $jurusan = Jurusan::paginate(5);
        }

        return view('adminjurusan.index', compact('jurusan'));
    }


    public function detail($id)
    {
        $jurusan = Jurusan::find($id);
        return view('adminjurusan.detail', compact('jurusan'));
    }

    public function destroy($id)
    {
        $jurusan = Jurusan::find($id);
        $jurusan->delete();
        return redirect('/admin/jurusan');
    }
}
