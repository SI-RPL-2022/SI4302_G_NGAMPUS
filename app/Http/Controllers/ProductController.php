<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('is_admin');
    // }
    public function productAdmin()
    {
        $product = Product::paginate(5);
        $jumlah = Product::count();
        $jumlah_kj = Product::where('jenisproduct','Kepo Jurusan')->get()->count();
        $jumlah_majore = Product::where('jenisproduct','Major Experience')->get()->count();
        $jumlah_webinar = Product::where('jenisproduct','Webinar')->get()->count();
        return view('adminproduk.index', compact('product', 'jumlah', 'jumlah_kj', 'jumlah_majore', 'jumlah_webinar'));
    }

    public function create()
    {
        return view('adminproduk.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/Admin/img'), $pictureName);

        $Product = Product::create([
            'namaproduct' => $request['namaproduct'],
            'jenisproduct' => $request['jenisproduct'],
            'penyelenggara' => $request['penyelenggara'],
            'kuota' => $request['kuota'],
            'tanggal' => $request['tanggal'],
            'lokasi' =>$request['lokasi'],
            'desc' => $request['desc'],
            'picture' => $pictureName,
        ]);
        return redirect('admin/produk');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('adminproduk.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/Admin/img'), $pictureName);
        $Product = Product::find($id);

        $Product->namaproduct = $request->namaproduct;
        $Product->jenisproduct = $request->jenisproduct;
        $Product->penyelenggara = $request->penyelenggara;
        $Product->kuota = $request->kuota;
        $Product->tanggal = $request->tanggal;
        $Product->lokasi = $request->lokasi;
        $Product->desc = $request->desc;
        $Product->picture = $pictureName;
        $Product->save();
        return redirect('/admin/produk');
    }
    public function destroy($id)
    {
        $Product = Product::find($id);
        $Product->delete();
        return redirect('/admin/produk');
    }
}
