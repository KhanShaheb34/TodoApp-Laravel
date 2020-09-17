@extends('layout')

@section('content')
    <table class="table table-striped border">
        <thead class="text-center">
            <th colspan="3">
                <h3>Pending Todo</h3>
            </th>
        </thead>
        
        <tbody>
            @foreach ($todos as $todo)
                <tr>
                    <td><h4>
                        {!! $todo->completed==1 ? "<del>":"" !!}
                            <a href="/{{ $todo->id }}">
                                {{ $todo->title }}
                            </a>
                        {!! $todo->completed==1 ? "</del>":"" !!}
                    </h4></td>
                    <td><a class="btn btn-success" href="/{{ $todo->id }}/complete">Complete</a></td>
                    <td><a class="btn btn-primary" href="/{{ $todo->id }}/edit">Edit</a></td>
                    <td>
                        <form action="/{{ $todo->id }}" method="post">
                            @csrf
                            @method('delete')

                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection