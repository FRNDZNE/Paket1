<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index',compact('kelas'));
    }

    public function store(Request $req)
    {
        $data = new Kelas;
        $data->nama = $req->nama;
        $data->jurusan = $req->jurusan;
        $data->save();
        return redirect()->back();
    }

    public function update(Request $req)
    {
        $kelas = Kelas::find($req->id);
        $kelas->nama = $req->nama;
        $kelas->jurusan = $req->jurusan;
        $kelas->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        Kelas::find($id)->delete();
        return redirect()->back();
    }
}
