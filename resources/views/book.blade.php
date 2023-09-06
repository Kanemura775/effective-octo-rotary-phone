@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row justify-content-center">
            <div class="col-8">
                <h3>Add new Book</h3>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="autofocus">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="year-published" class="form-label">Year Published</label>
                                <input type="number" maxlength="4" name="year_publisshed" id="year-published" placeholder="YYYY" value min="1800" max="2100">
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection




<label for="cover-photo" class="form-label">Cover Photo <span class="fst-italic"></span></label>
