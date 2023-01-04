<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use Illuminate\Http\Request;

class MagangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $magang = Magang::get();
        return view('magang.magang', ['magangList' => $magang]);
    } 

    public function show($id){
        $magang = Magang::findOrFail($id);
        return view('magang.magang_detail', ['magang' => $magang]);
    }

    public function create(){
        return view('magang.magang_add');
    }

    public function insert(){
        Request()->validate([
            'nama_perusahaan'=>'required',
            'alamat'=>'required',
            'posisi'=>'required',
            'open_gate'=>'required',
            'close_gate'=>'required',
            'keterangan'=>'required',
        ]);
    }

    public function addData($data){
        $magang = Magang::insert($data);
        $data = [
            'nama_perusahaan'=>Request()->nama_perusahaan,
            'alamat'=>Request()->alamat,
            'posisi'=>Request()->posisi,
            'open_gate'=>Request()->open_gate,
            'close_gate'=>Request()->close_gate,
            'keterangan'=>Request()->keterangan,
        ];
        return redirect()->route('magang')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit(Request $request, $id){
        $magang = Magang::findOrFail($id);
        return view('magang.magang_edit', ['magang' => $magang]);
    }

    public function update(Request $request, $id){
        $magang = Magang::findOrFail($id);
        $magang->nama_perusahaan = $request->nama_perusahaan;
        $magang->alamat = $request->alamat;
        $magang->posisi = $request->posisi;
        $magang->open_gate = $request->open_gate;
        $magang->close_gate = $request->close_gate;
        $magang->keterangan = $request->keterangan;
        $magang->save();
        return redirect('/magang');
    }

    public function delete($id){
        $magang = Magang::findOrFail($id);
        return view('magang.magang_delete', ['magang' => $magang]);
    }

    public function destroy($id){
        $deletemagang = Magang::findOrFail($id);
        $deletemagang->delete();
        return redirect('/magang');
    }
}
