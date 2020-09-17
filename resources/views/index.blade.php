@extends('layout')

@section('content')
    <table class="table table-striped border">
        <thead class="text-center">
            <th colspan="2">
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
                    <td style="text-align: right">
                        <a class="btn btn-success" href="/{{ $todo->id }}/complete">Complete</a>
                        <a class="btn btn-primary" style="display: inline-block" href="/{{ $todo->id }}/edit">Edit</a>
                        <form action="/{{ $todo->id }}" method="post" style="display: inline-block">
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