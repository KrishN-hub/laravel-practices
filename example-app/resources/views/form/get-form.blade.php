<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Get Form</title>
        <style>
           
        </style>
    </head>
    <body>
        <form action = "home"
                method = "post">
        
        @csrf
         @method('put')
        <input type="submit" value="get" name = "_method">
        
         
            
        </form> 
</body>


</html>