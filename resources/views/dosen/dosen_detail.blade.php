@extends('page.template')
@section('title', 'Detail Dosen')

@section('content')
<div class="card-body">
    <h4>Data dari {{$dosen -> nama_dosen}}</h4><br>
        <table class="table">
            <tr>
                <th width="200px">NIDN</th>
                <th width="30px">:</th>
                <th>{{ $dosen->nidn}}</th>
            </tr>
            <tr>
                <th width="200px">Nama</th>
                <th width="30px">:</th>
                <th>{{ $dosen->nama_dosen}}</th>
            </tr>
            <tr>
                <th width="200px">No Hp</th>
                <th width="30px">:</th>
                <th>{{ $dosen->no_hp}}</th>
            </tr>
            <tr>
                <th width="200px">Alamat</th>
                <th width="30px">:</th>
                <th>{{ $dosen->alamat}}</th>
            </tr>
        </table>
    </div>
@endsection