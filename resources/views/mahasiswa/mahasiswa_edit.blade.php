@extends('page.template')
@section('title', 'Edit Data Mahasiswa')

@section('content')
<form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>NPM</label>
                            <input name="npm" class="form-control @error('npm') is-invalid @enderror" value="{{$mahasiswa->npm}}">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input name="nama_mahasiswa" class="form-control  @error('nama_mahasiswa') is-invalid @enderror " value="{{$mahasiswa->nama_mahasiswa}}">
                        </div>
                        <div class="form-group">
                            <label>Program Studi</label>
                            <select class="form-control  @error('prodi') is-invalid @enderror" name="prodi" value="{{$mahasiswa->prodi}}">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input name="kelas" class="form-control  @error('kelas') is-invalid @enderror" value="{{$mahasiswa->kelas}}">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{$mahasiswa->alamat}}">
                        </div>
                        <div class="form-group">
                            <label>No Hp</label>
                            <input name="no_hp" class="form-control  @error('no_hp') is-invalid @enderror" value="{{$mahasiswa->no_hp}}">
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