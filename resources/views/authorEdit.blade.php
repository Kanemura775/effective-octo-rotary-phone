@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h3>Edit author</h3>
            <form action="{{route('author.update',$author->id)}}" method="post">
                @csrf
                @method('PATCH')
                <input type="text" name="name" class="form-control mb-3" placeholder="Edit author" value="{{$author->name}}" >
                <div class="row justify-content-center">
                    <div class="col"><a href="{{route('author.create')}}" class="btn btn-outline-warning w-100">Cancel</a></div>
                    <div class="col"><button type="submit" class="btn btn-warning w-100">Update</button></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
