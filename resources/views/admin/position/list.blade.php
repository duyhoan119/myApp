@extends('layout.master')
@section('title','Positionlist')
@section('content_title','Position list')
@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>STATUS</th>
               <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($positions as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('position.add', $item->id) }}">Edit</a>
                        <form action="{{route('position.delete',$item->id)}}" method="post">
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
