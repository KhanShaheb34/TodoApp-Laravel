@extends('layout')

@section('content')
    <h1>{{ $todo->title }}</h1> 
    <small>{{ $todo->completed==1 ? "Completed":"" }}</small>
    <p>{{ $todo->description }}</p>
@endsection
    