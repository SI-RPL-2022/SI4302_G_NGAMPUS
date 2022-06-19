<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }
    public function userAdmin()
    {
        $search = request()->query('search');
        if ($search){
            $user = User::where('name', 'like', "%{$search}%")->paginate(5);

        }
        else{
            $user = User::paginate(5);
        }

        return view('adminuser.index', compact('user'));
    }
    
    public function detail($id)
    {
        $user = User::find($id);
        return view('adminuser.detail', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('adminuser.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);

        $user->name = $request->name;
        $user->birthAt = $request->birthAt;
        $user->birthDate = $request->birthDate;
        $user->kota = $request->kota;
        $user->provinsi = $request->provinsi;
        $user->negara = $request->negara;
        $user->email = $request->email;
        $user->no_telp = $request->no_telp;
        $user->pekerjaan = $request->pekerjaan;
        $user->asalSekolah = $request->asalSekolah;
        $user->kelas = $request->kelas;
        $user->jurusan = $request->jurusan;
        $user->desc = $request->desc;
        $user->save();
        return redirect('/admin/user');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/user');
    }
}
