@extends('layout.master')
@section('title', 'Userlist')
@section('content_title', 'User list')
@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>AVATAR</th>
                <th>NGAỲ SINH</th>
                <th>MÃ NHÂN VIÊN</th>
                <th>EMAIL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td><img style="width:100px" src="{{asset($item->avatar)}}" alt=""></td>
                    <td>{{ $item->birthday }}</td>
                    {{-- <td>{{$item['']}}</td> --}}
                    <td>{{ $item->email }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ 'users/add/' . $item->id }}">Edit</a>
                        <form action="{{ route('users.delete',$item->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
@endsection
