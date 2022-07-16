@extends('layout.master')

@section('title','List product')
@section('content_title','List product')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th>name</th>
            <th>price</th>
            <th>sale_price</th>
            <th>image</th>
            <th>special</th>
            <th>view</th>
            <th>date_on</th>
            <th>desc</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($products as $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['price'] }}</td>
                <td>{{ $item['sale_price'] }}</td>
                <td><img style="width: 150px" src="{{asset('image/'.$item['image'])}}" alt=""></td>
                <td>{{ $item['special'] }}</td>
                <td>{{ $item['view'] }}</td>
                <td>{{ $item['date_on'] }}</td>
                <td>{{ $item['desc'] }}</td>
                <td>
                    <button class="btn btn-primary">edit</button>
                    <button class="btn btn-danger">delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$products->links('vendor.pagination.simple-bootstrap-5')}}
@endsection


