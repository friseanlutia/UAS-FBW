<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $mahasiswa = Mahasiswa::get();
        return view('mahasiswa.mahasiswa', ['mahasiswaList' => $mahasiswa]);
    } 

    public function show($id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.mahasiswa_detail', ['mahasiswa' => $mahasiswa]);
    }

    public function create(){
        return view('mahasiswa.mahasiswa_add');
    }

    public function insert(){
        Request()->validate([
            'npm' => 'required|unique:mahasiswa,npm|13',
            'nama_mahasiswa'=>'required',
            'prodi'=>'required',
            'kelas'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
        ]);
    }

    public function addData($data){
        $mahasiswa = Mahasiswa::insert($data);
        $data = [
            'npm' => Request()->npm,
            'nama_mahasiswa'=>Request()->nama_mahasiswa,
            'prodi'=>Request()->prodi,
            'kelas'=>Request()->kelas,
            'alamat'=>Request()->alamat,
            'no_hp'=>Request()->no_hp,
        ];
        return redirect()->route('guru')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit(Request $request, $id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.mahasiswa_edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request, $id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->npm = $request->npm;
        $mahasiswa->nama_mahasiswa = $request->nama_mahasiswa;
        $mahasiswa->prodi = $request->prodi;
        $mahasiswa->kelas = $request->kelas;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->no_hp = $request->no_hp;
        $mahasiswa->save();
        return redirect('/mahasiswa');
    }

    public function delete($id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.mahasiswa_delete', ['mahasiswa' => $mahasiswa]);
    }

    public function destroy($id){
        $deleteMahasiswa = Mahasiswa::findOrFail($id);
        $deleteMahasiswa->delete();
        return redirect('/mahasiswa');
    }
}
