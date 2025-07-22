<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
    @vite(['resources/scss/style.scss', 'resources/js/app.js'])

 <body>
    <h1> Edit</h1>
    <form action="/student/10" method="post" autocomplete="off" novalidate>
        @csrf
        @method('put')
        <table>
            <tr>
                <td><label >First Name:</label></td>
                <td><input type="text" name="fname" id="text"></td>
            </tr>
            <tr>
                <td><label >Last Name:</label></td>
                <td><input type="text" name="lname" id="text"></td>
            </tr>
            <tr>
                <td><label> Submit </label></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
            <tr>
                <td><label> delete </label></td>
                <td><input type ='submit' formaction="/student/10" formmethod="post"></td>
        </table>
    </form>
 </body>

</html>