@extends('page.template')
@section('title', 'Delete Perusahaan')

@section('content')
<div class="card-body">
    <div class="mt-5">
        <h2>Are you sure to delete data {{$magang->nama_magang}}</h2>
        <form style="display: inline-block" action="/magang_destroy/{{$magang->id}}" method="post">
            @csrf
            @method('delete')   
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="/magang" class="btn btn-outline-primary">Cancel</a>
    </div>
</div>
@endsection