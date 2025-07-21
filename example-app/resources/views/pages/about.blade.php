{{-- <html>
<head>
    <title>About page </title>
</head>
<body style="background-color:{{scolor}};">

    <h1>About page</h1>
    <p> my name is {{$my}}</p>

<body style="background-color:yellow;">
    <h1>about the web site</h1>
    <P>This website is created by k.Pirunthavan.</P>
</html> --}}

    {{-- --old practices-- --}}

@extends('layouts.index')
@section('content')
@section( 'title','About')

<h1>About page</h1>
<p> This website created for testing perposes..</p>
@endsection
