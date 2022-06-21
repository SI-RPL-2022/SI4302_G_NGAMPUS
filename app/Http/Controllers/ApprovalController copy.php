<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Approval;

class ApprovalController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('is_admin');
    // }
    public function productAdmin()
    {
        $daftar = Daftar::all;
        $jumlah = Daftar::count();
        $applied = Daftar::where('status','applied')->get()->count();
        $approved = Daftar::where('status','approved')->get()->count();
        $rejected = Daftar::where('status','rejected')->get()->count();
        return view('adminapproval.index', compact('daftar', 'jumlah', 'applied', 'approved', 'rejected'));
    }


    public function indexProduct($id)
    {
        $product = Product::where('jenisproduct', $id)->paginate(6);
        $testimoniproduk = TestimoniProduk::where('jenisproduct', $id)->paginate(6);
        $jenisproduct = $id;
        $faq = Faq::all();
        return view('produk.detailproduk', compact('product', 'jenisproduct', 'testimoniproduk', 'faq'));
    }

// testimoni produk
    public function testimoniIndex()
    {
        $testimoniproduk = TestimoniProduk::all();
        return view('testimoni.testimoniproduk', compact('testimoniproduk'));
    }

    public function detail($id)
    {
        $user = User::find($id);
        return view('adminuser.detail', compact('user'));
    }

    public function testimoniShow($id)
    {
        $testimoniproduk = TestimoniProduk::find($id);
        $testimoniproduk->show = "yes";
        $testimoniproduk->save();
        return redirect('admin/testimoni/produk');
    }

    public function testimoniHide($id)
    {
        $testimoniproduk = TestimoniProduk::find($id);
        $testimoniproduk->show = "no";
        $testimoniproduk->save();
        return redirect('admin/testimoni/produk');
    }

    
}
