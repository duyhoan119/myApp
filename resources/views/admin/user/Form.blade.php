@extends('layout.master');
@section('title', 'from add')
@section('content_title', 'from add')
@section('content')
    <div class="container">
        <form class="form-group" action="{{route('users.store',$user->id)}}" method="POST">
            @csrf
            <div><label for="">name</label> <input name="name" type="text " class="form-control" value="{{$user?$user->name:''}}"></div>
            <div><label for="">User name</label> <input name="username" type="text " class="form-control" value="{{$user?$user->username:''}}"></div>
            <div><label for="">Email</label> <input name="email" type="email" class="form-control" value="{{$user?$user->email:''}}"></div>
            <div><label for="">Password</label> <input name="password" type="password" class="form-control"></div>
            <div><label for="">Password confirm</label> <input name="password_confirm" type="password" class="form-control" value=""></div>
            <div><label for="">Room</label> <select name="room_id" id="">
                    @foreach ($rooms as $item)
                    <option {{$user->room_id == $item['id']?'selected':''}} value="{{$item['id']}}">{{$item['name']}}</option>
                    @endforeach
                </select></div>
            <div><label for="">birthday</label> <input name="birthday" type="date" class="form-control" value="{{$user?$user->birthday:''}}"></div>
            <div><label for="">phone</label> <input name="phone" type="text" class="form-control" value="{{$user?$user->phone:''}}"></div>
            <button type="submit">submit</button>
        </form>

    </div>
@endsection
