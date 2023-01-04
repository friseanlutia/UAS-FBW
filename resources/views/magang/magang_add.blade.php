@extends('page.template')
@section('title', 'Add Perusahaan')

@section('content')
<form action="/kaprodi_add/insert" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <input name="nama_perusahaan" class="form-control @error('nama_perusahaan') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input name="alamat" class="form-control  @error('alamat') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>Posisi</label>
                            <input name="posisi" class="form-control  @error('posisi') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>Pendaftaran</label>
                            <input name="open_gate" class="form-control @error('open_gate') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>Penutupan Pendaftaran</label>
                            <input name="close_gate" class="form-control @error('close_gate') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input name="keterangan" class="form-control @error('keterangan') is-invalid @enderror">
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