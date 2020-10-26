<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
    <style>
        form {
            display: flex;
            padding: 40px;
            flex-direction: column;
            width: 40%;
            margin: 0 auto
        }

        textarea {
            padding: 12px 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            resize: none;
            outline: none;

        }

        label {
            font-family: Arial, Helvetica, sans-serif;

            padding-top: 25px;
            padding-bottom: 5px
        }

        input {
            height: 30px;

            outline: none;
        }

        button {
            width: 30%;
            height: 40px;
            background: purple;
            color: white;
            border: 1px solid transparent;
            margin: 0 auto;
            text-transform: uppercase;
            margin-top: 25px;
            border-radius: 10px
        }

        button:hover {
            background: transparent;
            color: purple;
            border: 1px solid purple;
            transition: 0.3s;
            cursor: pointer;

        }
    </style>
</head>

<body>
    <h1 style="font-family: Arial, Helvetica, sans-serif;text-align:center">Edit Info</h1>

    <form action="{{ route('adminupdate')}}" method="POST">
        @csrf
    <input class="form-control" type="hidden" name="id" value="{{$employees->id}}">
        <label>name:</label>
        <input required type="text" name="name" placeholder="title" class="form-control"  value="{{$employees->name}}"/>
        <label>surname:</label>
        <input required type="text" name="surname" placeholder="title" class="form-control"  value="{{$employees->surname}}"/>
        <label>position:</label>
        <input required type="text" name="position" placeholder="title" class="form-control"  value="{{$employees->position}}"/>
        <label>phone:</label>
        <input required type="text" name="phone" placeholder="title" class="form-control"  value="{{$employees->phone}}"/>
     
        <input required style="display:none" type="text" name="is_hired" placeholder="0 or 1" class="form-control"  value="{{$employees->is_hired}}"/>
      
 
      
        <button class="btn brn-primary">submit</button>
    </form>

    </table>
</body>

</html>