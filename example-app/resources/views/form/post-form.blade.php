<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Form</title>
</head>
<body> 
    <form action="home" method="post">
        @csrf
        <input type="text" name="fname" id="fname" />
        <input type="submit" value="post" name= "_method">
        
    </form>
</body>

</html>