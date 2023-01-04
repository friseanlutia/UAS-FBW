<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $dosen = Dosen::get();
        return view('dosen.dosen', ['dosenList' => $dosen]);
    } 

    public function show($id){
        $dosen = Dosen::findOrFail($id);
        return view('dosen.dosen_detail', ['dosen' => $dosen]);
    }

    public function create(){
        return view('dosen.dosen_add');
    }

    public function insert(){
        Request()->validate([
            'nidn' => 'required|unique:dosen,nidn|13',
            'nama_dosen'=>'required',
            'no_hp'=>'required',
            'alamat'=>'required',
        ]);
    }

    public function addData($data){
        $dosen = Dosen::insert($data);
        $data = [
            'nidn' => Request()->nidn,
            'nama_dosen'=>Request()->nama_dosen,
            'alamat'=>Request()->alamat,
            'no_hp'=>Request()->no_hp,
        ];
        return redirect()->route('guru')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit(Request $request, $id){
        $dosen = Dosen::findOrFail($id);
        return view('dosen.dosen_edit', ['dosen' => $dosen]);
    }

    public function update(Request $request, $id){
        $dosen = Dosen::findOrFail($id);
        $dosen->nidn = $request->nidn;
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->no_hp = $request->no_hp;
        $dosen->alamat = $request->alamat;
        $dosen->save();
        return redirect('/dosen');
    }

    public function delete($id){
        $dosen = Dosen::findOrFail($id);
        return view('dosen.dosen_delete', ['dosen' => $dosen]);
    }

    public function destroy($id){
        $deletedosen = Dosen::findOrFail($id);
        $deletedosen->delete();
        return redirect('/dosen');
    }
}
