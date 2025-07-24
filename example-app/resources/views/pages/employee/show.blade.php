<html>
<head>
    <title>Employee Information</title>
</head>
<body>
    <h1>Employee Information</h1>
    {{-- {{dd($employee)}} --}}
    <a href="/employees" >Back</a>
    <hr>

    <table border = "1">

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







</table>
</body>
</html>