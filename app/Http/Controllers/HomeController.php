<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\jurusan;
use App\Models\kampus;
use App\Models\Product;
use App\Models\Daftar;

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
        $daftar = Daftar::all();
        $status = Daftar::selectRaw('status, count(status) as statuss')
            ->groupBy('status')
            ->get();
        // dd($status);

        $liststatus = [];
        foreach($status as $g){
            $liststatus[] = [
                'status' => $g->status,
                'y' => $g->statuss
            ];
        }
        // dd($liststatus);

        $produk = Product::all();
        $jenis_produk = Product::selectRaw('jenisproduct, count(jenisproduct) as jenis')
            ->groupBy('jenisproduct')
            ->get();

        $listjenis = [];
        $datajumlah = [];

        foreach($jenis_produk as $g){
            $listjenis[] = $g->jenisproduct;
            $datajumlah[] = $g->jenis;
        }

        $jumlah_user = User::count();
        $jumlah_produk = Product::count();
        $jumlah_jurusan = jurusan::count();
        $jumlah_kampus = kampus::count();
        $jumlah_applied = Daftar::count();
        return view('adminHome', compact('daftar', 'jumlah_user', 'jumlah_produk', 'jumlah_jurusan', 
        'jumlah_kampus', 'jumlah_applied', 'liststatus', 'listjenis', 'datajumlah'));

    }

    public function adminDetailHome($id)
    {
        $daftars = Daftar::all();
        $daftar = $daftars->intersect(Daftar::whereIn('id', [$id])->get());
        return view('adminDetailHome', compact('daftar'));
    }


    
}