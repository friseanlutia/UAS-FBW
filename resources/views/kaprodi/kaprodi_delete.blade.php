@extends('page.template')
@section('title', 'Delete Kaprodi')

@section('content')
<div class="card-body">
    <div class="mt-5">
        <h2>Are you sure to delete data {{$kaprodi->nama_kaprodi}}</h2>
        <form style="display: inline-block" action="/kaprodi_destroy/{{$kaprodi->id}}" method="post">
            @csrf
            @method('delete')   
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="/kaprodi" class="btn btn-outline-primary">Cancel</a>
    </div>
</div>
@endsection