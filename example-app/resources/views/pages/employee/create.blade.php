<html>
<head>
    <title>Edit Employee Information</title>
</head>
<body>
    <h1>Edit Employee Information</h1>
    <a href="/employees" >Back</a>
    <hr>

    {{-- <table border = "1">


        <tr>
            <th>ID</th>
            <td>{{ $employee->id }}</td>
        </tr>
        <tr>
            <th>First Name</th>
            <td>{{ $employee->first_name }}</td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td>{{ $employee->last_name }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $employee->created_at }}</td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td>{{ $employee->updated_at }}</td>

        </tr>

</table> --}}


<form action="/employees" method="post" autocomplete="off" novalidate>
    @csrf
    <table>
        <tr>
            <td><label >ID:</label></td>
            <td><input type="text" name="id" id="id" value=""></td>
        </tr>
        <tr>
            <td><label >First Name:</label></td>
            <td><input type="text" name=fname" id="fname" value=""></td>
        </tr>
        <tr>
            <td><label >Last Name:</label></td>
            <td><input type="text" name="lname" id="lname" value=""></td>
        </tr>
        <tr>
            <td><label >Created At:</label></td>
            <td><input type="datetime-local" name="created_at" id="created_at" value="" ></td>
        </tr>
        <tr>
            <td><label >Updated At:</label></td>
            <td><input type="datetime-local" name="ubdated_at" id="ubdated_at" value="" ></td>
        <tr>
            <td><input type="submit" value="Submit"></td>
        </tr>



</body>
</html>