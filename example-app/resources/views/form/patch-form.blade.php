<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Patch Form</title>
    </head>
    <body>
        <form action="home" method="post">
            @csrf
            @method('patch')
            <input type="submit" value="patch" name = "_method">
        </form>
</html>