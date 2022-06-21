<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $product = Home::paginate(5);
        $jumlah = Home::count();
        $jumlah_kj = Home::where('jenisproduct','Kepo Jurusan')->get()->count();
        $jumlah_majore = Home::where('jenisproduct','Major Experience')->get()->count();
        $jumlah_webinar = Home::where('jenisproduct','Webinar')->get()->count();
        return view('adminHome', compact('product', 'jumlah', 'jumlah_kj', 'jumlah_majore', 'jumlah_webinar'));
    }
    public function adminShow($id)
    {
        $product = Home::find($id);
        $product->show = "yes";
        $product->save();
        return redirect('admin/home');
    }

    public function adminHide($id)
    {
        $product = Home::find($id);
        $product->show = "no";
        $product->save();
        return redirect('admin/home');
    }
    
}