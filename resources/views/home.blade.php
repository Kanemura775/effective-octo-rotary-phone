@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col">
                                <div class="card py-5">
                                    <a href="{{ route('author') }}"></a>
                                    <div class="card-body">
                                        <h2 class="text-primary text-center fw-bold display-4">Authors 3</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card py-5">
                                    <div class="card-body">
                                        <h2 class="text-success text-center fw-bold display-4">Books 3</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
