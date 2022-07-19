@extends('layout.master')
@section('title','Roomlist')
@section('content_title','Room list')
@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>STATUS</th>
                <th>PARENT ID</th>
               <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->parent_id }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('rooms.add', $item->id) }}">Edit</a>
                        <form action="{{ route('rooms.delete',$item->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table
@endsection
