@extends('page.template')
@section('title', 'Data Mahasiswa')

@section('content')
<div class="card-body">
    <div class="mt-4">
        <div class="col card-header text-right">
            <a href="mahasiswa_add" class="btn btn-primary plus">
                Add Mahasiswa
            </a>
            </button>
        </div>
    </div>
   <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswaList as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->npm }}</td>
                <td>{{ $item->nama_mahasiswa }}</td>
                <td>{{ $item->prodi }}</td>
                <td>
                    <a href="mahasiswa/{{$item->id}}" class="btn btn-sm btn-success">Detail</a>
                    <a href="mahasiswa_edit/{{$item->id}}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="mahasiswa_delete/{{$item->id}}" class="btn btn-sm btn-danger">Delete</a>
                </td>                
                </tr>
            @endforeach
        </tbody>  
   </table>
</div>
@endsection