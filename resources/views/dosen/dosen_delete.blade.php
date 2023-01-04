@extends('page.template')
@section('title', 'Delete Dosen')

@section('content')
<div class="card-body">
    <div class="mt-5">
        <h2>Are you sure to delete data {{$dosen->nama_dosen}}</h2>
        <form style="display: inline-block" action="/dosen_destroy/{{$dosen->id}}" method="post">
            @csrf
            @method('delete')   
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="/dosen" class="btn btn-outline-primary">Cancel</a>
    </div>
</div>
@endsection