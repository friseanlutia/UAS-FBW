@extends('page.template')
@section('title', 'Data Kaprodi')

@section('content')
<div class="card-body">
    <div class="mt-4">
        <div class="col card-header text-right">
            <a href="kaprodi_add" class="btn btn-primary plus">
                Add Kaprodi
            </a>
            </button>
        </div>
    </div>
   <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIDN</th>
                <th scope="col">Nama</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kaprodiList as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nidn }}</td>
                <td>{{ $item->nama_kaprodi }}</td>
                <td>
                    <a href="kaprodi/{{$item->id}}" class="btn btn-sm btn-success">Detail</a>
                    <a href="kaprodi_edit/{{$item->id}}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="kaprodi_delete/{{$item->id}}" class="btn btn-sm btn-danger">Delete</a>
                </td>                
                </tr>
            @endforeach
        </tbody>  
   </table>
</div>
@endsection