@extends('page.template')
@section('title', 'Delete Mahasiswa')

@section('content')
<div class="card-body">
    <div class="mt-5">
        <h2>Are you sure to delete data {{$mahasiswa->nama_mahasiswa}}</h2>
        <form style="display: inline-block" action="/mahasiswa_destroy/{{$mahasiswa->id}}" method="post">
            @csrf
            @method('delete')   
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="/mahasiswa" class="btn btn-outline-primary">Cancel</a>
    </div>
</div>
@endsection