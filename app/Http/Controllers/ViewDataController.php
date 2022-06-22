<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\jurusan;
use App\Models\kampus;
use App\Models\TestimoniProduk;
use App\Models\Faq;
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
        $faq = Faq::all();
        return view('produk.detailproduk', compact('product', 'jenisproduct', 'testimoniproduk', 'faq'));
    }

    public function indexAboutUs()
    {
        $jumlah_user = User::count();
        $jumlah_produk = Product::count();
        $jumlah_jurusan = jurusan::count();
        $jumlah_kampus = kampus::count();
        $faq = Faq::all();
        return view('AboutUs', compact('jumlah_user', 'jumlah_produk', 'jumlah_jurusan', 'jumlah_kampus', 'faq'));
    }

    public function indexHomeAdmin()
    {
        $jumlah_user = User::count();
        $jumlah_produk = Product::count();
        $jumlah_jurusan = jurusan::count();
        $jumlah_kampus = kampus::count();
        return view('AboutUs', compact('jumlah_user', 'jumlah_produk', 'jumlah_jurusan', 'jumlah_kampus'));
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

    public function indexProfile($id)
    {
        $users = User::all();
        $user = $users->intersect(User::whereIn('id', [$id])->get());
        return view('profile.index', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);
        if ($request->picture !== null) {
            $cek = $request->password;
            if (Hash::check($cek, $user->password)) {
                $request->validate([
                    'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
                ]);
                $pictureName = time() . '.' . $request->picture->extension();
                $request->picture->move(public_path('/Template/images'), $pictureName);
                $user = User::find($id);
                $user->picture = $pictureName;
                $user->name = $request->name;
                $user->no_hp = $request->no_hp;
                $user->save();
            }
        }
        return redirect('profile/' . $id);
    }

}
