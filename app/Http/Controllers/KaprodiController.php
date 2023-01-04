<?php

namespace App\Http\Controllers;

use App\Models\Kaprodi;
use Illuminate\Http\Request;

class KaprodiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $kaprodi = Kaprodi::get();
        return view('kaprodi.kaprodi', ['kaprodiList' => $kaprodi]);
    } 

    public function show($id){
        $kaprodi = Kaprodi::findOrFail($id);
        return view('kaprodi.kaprodi_detail', ['kaprodi' => $kaprodi]);
    }

    public function create(){
        return view('kaprodi.kaprodi_add');
    }

    public function insert(){
        Request()->validate([
            'nidn' => 'required|unique:kaprodi,nidn|13',
            'nama_kaprodi'=>'required',
            'no_hp'=>'required',
            'alamat'=>'required',
        ]);
    }

    public function addData($data){
        $kaprodi = Kaprodi::insert($data);
        $data = [
            'nidn' => Request()->nidn,
            'nama_kaprodi'=>Request()->nama_kaprodi,
            'alamat'=>Request()->alamat,
            'no_hp'=>Request()->no_hp,
        ];
        return redirect()->route('Kaprodi')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit(Request $request, $id){
        $kaprodi = Kaprodi::findOrFail($id);
        return view('kaprodi.kaprodi_edit', ['kaprodi' => $kaprodi]);
    }

    public function update(Request $request, $id){
        $kaprodi = Kaprodi::findOrFail($id);
        $kaprodi->nidn = $request->nidn;
        $kaprodi->nama_kaprodi = $request->nama_kaprodi;
        $kaprodi->no_hp = $request->no_hp;
        $kaprodi->alamat = $request->alamat;
        $kaprodi->save();
        return redirect('/kaprodi');
    }

    public function delete($id){
        $kaprodi = Kaprodi::findOrFail($id);
        return view('kaprodi.kaprodi_delete', ['kaprodi' => $kaprodi]);
    }

    public function destroy($id){
        $deletekaprodi = Kaprodi::findOrFail($id);
        $deletekaprodi->delete();
        return redirect('/kaprodi');
    }
}
