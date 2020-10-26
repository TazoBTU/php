<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 0 auto;
            width: 80%;
            margin-top: 30px;
        }

        th {
            text-transform: uppercase
        }
        a{
            background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 10px;
        }
        table,
        td,
        th {
            border: 1px solid rgb(80, 79, 79);
            padding: 15px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center
        }
    </style>
</head>

<body>
    <table>
        <h1 style="font-family: Arial, Helvetica, sans-serif;text-align:center">Employee List</h1>

        <tr>
            <th>#</th>
            <th>Name</th>
            <th>surname</th>
            <th>position</th>
            <th>phone</th>
            <th>is hired</th>
            <th>Edit</th>

        </tr>
        @foreach ($employee as $data)

        <tr>
            <td>{{++$loop->index}}</td>
            <td>{{$data["name"]}}</td>
            <td>{{$data["surname"]}}</td>
            <td>{{$data["position"]}}</td>
            <td>{{$data["phone"]}}</td>
            <td>{{$data["is_hired"]}}</td>
            <td>
                <a href="{{route('adminedit',["id"=>$data->id])}}" class="btn btn-warning">edit</a>
    
            </td>
        </tr>
        @endforeach

    </table>
</body>

</html>