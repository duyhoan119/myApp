@extends('layout.master')
@section('title','login')
@section('content')
<div class="container">
<form class="form-group" action="{{route('success')}}" method="POST">
    @csrf
    <div><label for="">username name</label> <input name="username" type="text " class="form-control"></div>
    <div><label for="">email</label> <input name="email" type="email " class="form-control"></div>
    <div><label for="">password</label> <input name="password" type="password" class="form-control"></div>
    <button type="submit" >submit</button>
</form>
</div>
@endsection
