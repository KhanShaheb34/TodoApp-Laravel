@extends('layout')

@section('content')
    <h3 style="text-align: center">Edit Todo</h3>

    <form action="/{{ $todo->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
        <input type="text" name="title" class="form-control" value="{{ $todo->title }}" id="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" name="description" id="description">{{ $todo->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection