    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Delete Form</title>
        </head>
        <body>
            <form action="home" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete" name = "_method" >

            </form>
    </html>