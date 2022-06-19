<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('is_admin');
    // }

    public function faqAdmin()
    {
        $faq = Faq::paginate(5);
        return view('adminfaq.index', compact('faq'));
    }

    public function create()
    {
        return view('adminfaq.create');

    }

    public function store(Request $request)
    {
        $faq = Faq::create([
            'pertanyaan' => $request['pertanyaan'],
            'jawaban' => $request['jawaban'],
            'kategori' => $request['kategori']
        ]);
        return redirect('admin/faq');
    }

    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('adminfaq.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $faq = Faq::find($id);

        $faq->pertanyaan = $request->pertanyaan;
        $faq->jawaban = $request->jawaban;
        $faq->kategori = $request->kategori;
        $faq->save();
        return redirect('/admin/faq');
    }

    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect('/admin/faq');
    }
}
