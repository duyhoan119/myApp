
@extends('layout.master');
@section('title', 'from add')
@section('content_title', 'Add new room')
@section('content')
    <div class="container">
        <form class="form-group" action="{{route('rooms.store',isset($room)?$room->id:'')}}" method="POST">
            @csrf
            <div><label for="">name</label> <input name="name" type="text " class="form-control" value="{{isset($room)?$room->name:''}}"></div>
            <button type="submit">submit</button>
        </form>
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
            <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>

    </div>
@endsection
