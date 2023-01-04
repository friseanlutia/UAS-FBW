@extends('page.template')
@section('title', 'Detail Kaprodi')

@section('content')
<div class="card-body">
    <h4>Data dari {{$kaprodi -> nama_kaprodi}}</h4><br>
        <table class="table">
            <tr>
                <th width="200px">NIDN</th>
                <th width="30px">:</th>
                <th>{{ $kaprodi->nidn}}</th>
            </tr>
            <tr>
                <th width="200px">Nama</th>
                <th width="30px">:</th>
                <th>{{ $kaprodi->nama_kaprodi}}</th>
            </tr>
            <tr>
                <th width="200px">No Hp</th>
                <th width="30px">:</th>
                <th>{{ $kaprodi->no_hp}}</th>
            </tr>
            <tr>
                <th width="200px">Alamat</th>
                <th width="30px">:</th>
                <th>{{ $kaprodi->alamat}}</th>
            </tr>
        </table>
    </div>
@endsection