<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\jurusan;
use App\Models\kampus;
use App\Models\Product;
use App\Models\Daftar;
use App\Models\Home;
use App\Models\Master;

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
        $master = Master::all();
        return view('Home', compact('master'));
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

    public function adminDetailApproval($id)
    {
        $daftars = Daftar::all();
        $daftar = $daftars->intersect(Daftar::whereIn('id', [$id])->get());
        return view('approvalkegiatan.detail', compact('daftar'));
    }

    public function adminApproval()
    {
        $daftar = Daftar::all();
        $jumlah_daftar = Daftar::count();
        $jumlah_applied = Daftar::where('status','Applied')->get()->count();
        $jumlah_approved = Daftar::where('status','Approved')->get()->count();
        $jumlah_rejected = Daftar::where('status','Rejected')->get()->count();
        return view('approvalkegiatan.index', compact('daftar','jumlah_daftar', 'jumlah_applied', 'jumlah_approved', 'jumlah_rejected'));
    }

    public function adminUpdateHome(Request $request)
    {
        $daftar = Daftar::find($request->id);
        $daftar->status = $request->status;
        $daftar->save();
        return redirect('/admin/approval');
    }

    
    public function homeIndex()
    {
        $product = Home::all();
        return view('home', compact('product'));
    }
}