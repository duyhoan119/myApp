<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>CLASS</th>
                    <th>ADDRESS</th>
                    <th>DATE</th>
                    <th>ACTION</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['class'] }}</td>
                        <td>{{ $item['address'] }}</td>
                        <td>{{ $item['date'] }}</td>
                        <td>
                            <button class="btn btn-primary">edit</button>
                            <button class="btn btn-danger">delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
