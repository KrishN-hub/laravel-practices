<html>
<head>
    <title>Employee List</title>
</head>
<body>
    <h1>Employee List</h1>

    {{-- {{dd($employee)}} --}}
{{-- <pre>
    {{print_r($employees)}}
</pre> --}}

{{-- @foreach ($employees as $employee )
{{$employee->first_name}}
{{$employee->last_name}}
{{$employee->created_at}}
{{$employee->updated_at}}
<hr>
@endforeach --}}

{{-- @foreach ($employees as $employee )
{{$employee['first_name']}}
{{$employee['last_name']}}
<hr>
@endforeach --}}

<table border ="2">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>

    <tr>
        @foreach ($employees as $employee)
        <tr>
        <td>{{$employee->id}}</id>
        <td>{{$employee->first_name}}</td>
        <td>{{$employee->last_name}}</td>
        <td>{{$employee->created_at}}</td>
        <td>{{$employee->updated_at}}</td>
        <td><a href="employees/{{$employee->id}}" >show</a></td>
        <td><a href="employees/{{$employee->id}}/edit" >edit</a></td>
        <td> <form action="/employees/{{$employee->id}}" method="post" style="display:inline;">
            @csrf
            @method('delete')
            <button type="submit" >Delete</button>
          </form>
        </td>
        </tr>
        @endforeach
    </tr>


</table>
</body>
</html>