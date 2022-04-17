<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\TestimoniProduk;
use Illuminate\Support\Facades\Hash;

class ViewDataController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('Home', compact('product'));
    }


    public function indexProduct($id)
    {
        $product = Product::where('jenisproduct', $id)->paginate(6);
        $testimoniproduk = TestimoniProduk::where('jenisproduct', $id)->paginate(6);
        $jenisproduct = $id;
        return view('produk.detailproduk', compact('product', 'jenisproduct', 'testimoniproduk'));
    }

// testimoni produk
    public function testimoniIndex()
    {
        $testimoniproduk = TestimoniProduk::all();
        return view('testimoni.testimoniproduk', compact('testimoniproduk'));
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
