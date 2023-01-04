@extends('page.template')
@section('title', 'Detail Perusahaan')

@section('content')
<div class="card-body">
    <h4>Data dari {{$magang -> nama_perusahaan}}</h4><br>
        <table class="table">
            <tr>
                <th width="200px">Nama Perusahaan</th>
                <th width="30px">:</th>
                <th>{{ $magang->nama_perusahaan}}</th>
            </tr>
            <tr>
                <th width="200px">Alamat</th>
                <th width="30px">:</th>
                <th>{{ $magang->alamat}}</th>
            </tr>
            <tr>
                <th width="200px">Posisi</th>
                <th width="30px">:</th>
                <th>{{ $magang->posisi}}</th>
            </tr>
            <tr>
                <th width="200px">Pendaftaran</th>
                <th width="30px">:</th>
                <th>{{ $magang->open_gate}}</th>
            </tr>
            <tr>
                <th width="200px">Penutupan Pendaftaran</th>
                <th width="30px">:</th>
                <th>{{ $magang->close_gate}}</th>
            </tr>
            <tr>
                <th width="200px">Keterangan</th>
                <th width="30px">:</th>
                <th>{{ $magang->keterangan}}</th>
            </tr>
        </table>
    </div>
@endsection