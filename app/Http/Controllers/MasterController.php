<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master;

class MasterController extends Controller
{
    public function masterIndex()
    {
        $master = Master::paginate(5);
        return view('adminmaster.index', compact('master'));
    }

    public function edit($id)
    {
        $master = Master::find($id);
        return view('adminmaster.edit', compact('master'));
    }

    public function update(Request $request, $id)
    {
        $master = Master::find($id);

        $master->jenis = $request->jenis;
        $master->keterangan = $request->keterangan;
        $master->save();
        return redirect('/admin/master');
    }
}
