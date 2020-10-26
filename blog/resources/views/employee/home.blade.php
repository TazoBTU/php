<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
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
    <h1 style="font-family: Arial, Helvetica, sans-serif;text-align:center">Add Emplyee</h1>
    <form action="{{ route('adminstore')}}" method="POST">
        @csrf
        <label>Name:</label>
        <input required type="text" name="name" />
        <label>surname:</label>

        <input required type="text" name="surname" />
        <label>position :</label>

        <input required type="text" name="position" />
     
        <label>phone :</label>

        
        <input required type="text" name="phone" />
        {{-- <label>is_hired :</label> --}}

        
        <input style="display: none"  type="text" name="is_hired " />
        
      

     
        <button>submit</button>
    </form>
</body>

</html>