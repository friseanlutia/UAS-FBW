@extends('page.template')
@section('title', 'Data Perusahaan')

@section('content')
<div class="card-body">
    <div class="mt-4">
        <div class="col card-header text-right">
            <a href="magang_add" class="btn btn-primary plus">
                Add Perusahaan
            </a>
            </button>
        </div>
    </div>
   <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Perusahaan</th>
                <th scope="col">Posisi di perusahaan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($magangList as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_perusahaan }}</td>
                <td>{{ $item->posisi }}</td>
                <td>
                    <a href="magang/{{$item->id}}" class="btn btn-sm btn-success">Detail</a>
                    <a href="magang_edit/{{$item->id}}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="magang_delete/{{$item->id}}" class="btn btn-sm btn-danger">Delete</a>
                </td>                
                </tr>
            @endforeach
        </tbody>  
   </table>
</div>
@endsection