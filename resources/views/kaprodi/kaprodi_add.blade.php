@extends('page.template')
@section('title', 'Add Kaprodi')

@section('content')
    <form action="/kaprodi_add/insert" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>NIDN</label>
                            <input name="nidn" class="form-control @error('nidn') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input name="nama_kaprodi" class="form-control  @error('nama_kaprodi') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>No Hp</label>
                            <input name="no_hp" class="form-control  @error('no_hp') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input name="alamat" class="form-control @error('alamat') is-invalid @enderror">
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