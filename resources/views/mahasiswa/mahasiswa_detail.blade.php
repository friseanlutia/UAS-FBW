@extends('page.template')
@section('title', 'Detail Mahasiswa')

@section('content')
<div class="card-body">
    <h4>Data dari {{$mahasiswa -> nama_mahasiswa}}</h4><br>
        <table class="table">
            <tr>
                <th width="200px">NPM</th>
                <th width="30px">:</th>
                <th>{{ $mahasiswa->npm}}</th>
            </tr>
            <tr>
                <th width="200px">Nama</th>
                <th width="30px">:</th>
                <th>{{ $mahasiswa->nama_mahasiswa}}</th>
            </tr>
            <tr>
                <th width="200px">Program Studi</th>
                <th width="30px">:</th>
                <th>{{ $mahasiswa->prodi}}</th>
            </tr>
            <tr>
                <th width="200px">Kelas</th>
                <th width="30px">:</th>
                <th>{{ $mahasiswa->kelas}}</th>
            </tr>
            <tr>
                <th width="200px">Alamat</th>
                <th width="30px">:</th>
                <th>{{ $mahasiswa->alamat}}</th>
            </tr>
            <tr>
                <th width="200px">No Hp</th>
                <th width="30px">:</th>
                <th>{{ $mahasiswa->no_hp}}</th>
            </tr>
        </table>
    </div>
@endsection