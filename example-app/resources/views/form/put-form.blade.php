<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Put Form</title>
    
</head>
<body>
    <form action="home" method="post">
        @csrf
        @method('put')
        <input type = "text" name = "fname" id =  "fname"/>
    
        <input type="submit" value="put" name = "_method">
    </form>
</html>