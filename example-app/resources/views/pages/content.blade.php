{{--
<html>
<head>
    <title>Content Page</title>
</head>
<body>
    <h1>Content Page</h1>
    <p>This is a simple example of a Blade template in Laravel.</p>
    <p>Laravel is a web application framework with expressive, elegant syntax.</p>
    <p>It provides a robust set of tools and an application architecture that incorporates many of the best features from frameworks like Ruby on Rails, ASP.NET MVC, and others.</p>
    <p>Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality.</p>
    <p>For more information, visit the <a href="https://laravel.com/docs">Laravel documentation</a>.</p>
</body>

<footer>
    <p>&copy; 2023 Your Company Name. All rights reserved.</p>
</footer>
</body>




</html> --}}


@extends('layouts.master')
@section('content')
@section('title' , 'Content')
    <h1>Content Page</h1>
    <p>This is a simple example of a Blade template in Laravel.</p>
    <p>Laravel is a web application framework with expressive, elegant syntax.</p>
    <p>It provides a robust set of tools and an application architecture that incorporates many of the best features from frameworks like Ruby on Rails, ASP.NET MVC, and others.</p>
    <p>Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality.</p>
    <p>For more information, visit the <a href="https://laravel.com/docs">Laravel documentation</a>.</p>
@endsection