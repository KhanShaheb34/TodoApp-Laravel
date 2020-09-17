@extends('layout')

@section('content')
    <form action="/" method="post">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" name="description" id="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection