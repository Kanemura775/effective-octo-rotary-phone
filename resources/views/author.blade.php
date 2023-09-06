@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row justify-content-center">
            <div class="col-8">
            <h3>Authors</h3>
            <form action="{{route('author.store')}}" method="post">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-10">
                        <input type="text" name="name" class="form-control" placeholder="Add new author">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-success w-100">
                            <i class="fa-solid fa-plus"></i>
                            Add
                        </button>
                    </div>
                </div>
            </form>
            <ul class="list-group mt-4">
                @foreach($authors as $author)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">{{$author->name}}</div>
                            <div class="col text-end">
                                <a href="{{route('author.edit',$author->id)}}" title="Edit" class="btn btn-outline-warning btn-sm border-0"><i class="fa-solid fa-file-pen"></i></a>
                                <form action="{{route('author.destroy',$author->id)}}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        </div>
    </div>
</div>
@endsection
