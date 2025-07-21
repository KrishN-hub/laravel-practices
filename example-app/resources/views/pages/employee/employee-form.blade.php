{{-- <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="name"], input[type="age"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <form action="/employee-details" method="post">
        @csrf

        <h2>Employee Form</h2>

        <label for="name">Id:</label>
        <input type="text" name="id" id="id" required>


        <label for="email">Name:</label>
        <input type="name" name="name" id="name" required>


        <label for="age">Age:</label>
        <input type="text" name="age" id="age" required>

        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" id="phone" required>

        <label for="nic">Nic Number:</label>
        <input type="text" name="nic" id="nic" required>



        <input type="submit" value="Submit">


    </form>



</body>


</html> --}}

{{-- -------------------------------------------------- --}}


@extends('layouts.index')
@section('css')
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="name"], input[type="age"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        </style>
    @endsection
    @section('content')
    @section('title', 'Career')
    <form action="/employee-details" method="post">
        @csrf

        <h2>Employee Form</h2>

        <label for="name">Id:</label>
        <input type="text" name="id" id="id" required>


        <label for="email">Name:</label>
        <input type="name" name="name" id="name" required>


        <label for="age">Age:</label>
        <input type="text" name="age" id="age" required>

        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" id="phone" required>

        <label for="nic">Nic Number:</label>
        <input type="text" name="nic" id="nic" required>



        <input type="submit" value="Submit">


    </form>

    @endsection
