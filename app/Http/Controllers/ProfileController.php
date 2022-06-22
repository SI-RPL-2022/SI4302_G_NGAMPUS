<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile.index', compact('user'));
    }

    public function indexUpdate()
    {
        $user = Auth::user();
        return view('profile.editProfile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
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
        return redirect('/profile/{{$user->id}}');
    }
}
