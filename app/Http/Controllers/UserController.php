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
        $user = user::find($id);
        return view('adminuser.detail', compact('user'));
    }

    public function edit(Request $request, $id)
    {
        $user = User::find($id);
        $user->password = $request->password;
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
