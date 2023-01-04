@extends('page.template')
@section('title', 'Edit Data Dosen')

@section('content')
<form action="/dosen/{{ $dosen->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>NIDN</label>
                            <input name="nidn" class="form-control @error('nidn') is-invalid @enderror" value="{{$dosen->nidn}}">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input name="nama_dosen" class="form-control  @error('nama_dosen') is-invalid @enderror " value="{{$dosen->nama_dosen}}">
                        </div>
                        <div class="form-group">
                            <label>No Hp</label>
                            <input name="no_hp" class="form-control  @error('no_hp') is-invalid @enderror" value="{{$dosen->no_hp}}">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{$dosen->alamat}}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
@endsection