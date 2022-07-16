@extends('layout.master');
@section('title', 'from add')
@section('content_title', 'from add')
@section('content')
    <div class="container">
        <form class="form-group" action="{{ route('success') }}" method="POST">
            @csrf
            <div><label for="">name</label> <input name="name" type="text " class="form-control"></div>
            <div><label for="">price</label> <input name="price" type="number " class="form-control"></div>
            <div><label for="">image</label> <input name="image" type="file" class="form-control"></div>
            <div><label for="">category</label> <select name="category_id" id="">
                    @foreach ($categories as $item)
                    <option value="{{$item['id']}}">{{$item['name']}}</option>
                    @endforeach
                </select></div>

            <div><label for="">special</label> <input name="special" type="special" class="form-control"></div>
            <div><label for="">date on</label> <input name="date_on" type="date" class="form-control"></div>
            <div><label for="">desc</label> <input name="desc" type="text" class="form-control"></div>
            <button type="submit">submit</button>
        </form>
        
    </div>
@endsection
