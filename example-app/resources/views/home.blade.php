{{-- <html>
<head>
    <title> welcome buddy...!</title>
</head>
<body>
    <h1>Welcome to the Home Page</h1>
    <div>php
        <a href="pages/about">Go to about Page</a>
        <div>
    <div>
        <a href="mental/photo">Go to about Page</a>
    </div>
    <div>
        <a href="pages/content">Go to about Page</a>
    </div>
    <footer>
        <p>&copy; 2023 mongoose private Ltd. All rights reserved.</p>
    </footer>
</body>
</html> --}}


{{-- <html>
<head>
    <title>Welcome Buddy...!</title>
</head>
<body>
    <img src = "{{ asset('images/image.jpg') }}" alt="Images" style="width:100%; height:auto;">

</html> --}}

@extends('layouts.index')
@section('sidebar')
@parent
@endsection
@section('title','Home')

@section('content')
             <h1>Welcome to the Home Page</h1>

@endsection

