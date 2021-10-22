<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;

class SppController extends Controller
{
    public function index()
    {
        $spp = Spp::all();
        return view('spp.index',compact('spp'));
    }

    public function store(Request $req)
    {
        $data = new spp;
        $data->tahun = $req->tahun;
        $data->nominal = $req->nominal;
        $data->save();
        return redirect()->back();
    }

    public function update(Request $req)
    {
        $spp = Spp::find($req->id);
        $spp->tahun = $req->tahun;
        $spp->nominal = $req->nominal;
        $spp->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        Spp::find($id)->delete();
        return redirect()->back();
    }
}
