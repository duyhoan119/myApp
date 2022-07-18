@extends('layout.master');
@section('title', 'from add')
@section('content_title', 'from add')
@section('content')
    <div class="container">
        <form class="form-group" action="{{route('users.store',isset($user)?$user->id:'')}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <div><label for="">name</label> <input name="name" type="text " class="form-control" value="{{isset($user)?$user->name:''}}"></div>
            <div><label for="">User name</label> <input name="username" type="text " class="form-control" value="{{isset($user)?$user->username:''}}"></div>
            <div><label for="">Email</label> <input name="email" type="email" class="form-control" value="{{isset($user)?$user->email:''}}"></div>
            <div><label for="">Password</label> <input name="password" type="password" class="form-control"></div>
            <div><label for="">Password confirm</label> <input name="password_confirm" type="password" class="form-control" value=""></div>
            <div><label for="">Room</label> <select name="room_id" id="">
                    @foreach ($rooms as $item)
                    <option {{isset($user)?$user->room_id == $item['id']?'selected':'':''}} value="{{$item['id']}}">{{$item['name']}}</option>
                    @endforeach
                </select></div>
            <div><label for="">birthday</label> <input name="birthday" type="date" class="form-control" value="{{isset($user)?$user->birthday:''}}"></div>
            <div><label for="">phone</label> <input name="phone" type="text" class="form-control" value="{{isset($user)?$user->phone:''}}"></div>
            <div><label for="">Avatar</label> <input name="avatar" type="file" class="form-control" value="{{isset($user)?$user->avatar:''}}"></div>
            <button type="submit">submit</button>
        </form>
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
            <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>

    </div>
@endsection
