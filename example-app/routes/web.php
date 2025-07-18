<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


// Route::get('home', function () {
//     return view('home');
// });


// Route::get('pages/about', function () {
//     return view('pages.about');
// });

// Route::get('pages/content', function () {
//     return view('pages/content');
// });

// Route::get('mental/photo', function () {
//     return "one eye photo";
// });
// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');
Route::view('home', 'home');
Route::view('pages/about', 'pages.about');
Route::view('pages/content', 'pages.content');
Route::view('mental/photo', 'pages.photo');

// Route::get('my-page', function() {
// 	return 'This is my page';
// });

// Route::get('my-page/{name}', function($name) {
// 	return $name;
// });

// Route::get('pages/{about}', function($about) {
// 	return view('pages/'.$about);
// });

// Route::get('pages/about/{name}', function($name) {
//     return view('pages.about',['my' =>$name] );
// });

// Route::get('pages/about/{name}/{color}', function($name, $color) {
//     return view('pages.about',['my' =>$name, 'color' => $color] );

// });


Route::view('pages/employee/employee-list', 'pages.employee.employee-list');



Route::get('pages/employee/employee-details/{id?}/{name?}/{age?}/{number?}/{nic?}', function($id = 1, $name = "pirunthavan", $age = 26, $number = "0772413863", $nic = "992260742v") {



return view('pages.employee.employee-details', [
        'id' => $id,
        'name' => $name,
        'age' => $age,
        'number' => $number,
        'nic' => $nic
    ]);
});

// Route:: get("home", function () {
//     return ( "Wel come to my home page" );
// });

// Route:: post("home", function () {
//     return ( "Wel come to my home page" );
// });

// Route:: get("home", function () {
//     return ( "Wel come to my home page" );
// });

// Route::get("my-form" , function () {
//     return view("form/get-form");
// });

// // Route:: post("home", function () {
// //     return ( "Wel come to my home page" );
// // });

// Route:: get("home", function () {
//     return 'get  method' ;
// });

// Route:: delete("home", function () {
//     return ( "delete method" );
// });

// Route:: patch("home", function () {
//     return ( "patch method" );
// });

// Route:: options("home", function () {
//     return ( "options method" );
// });

// Route::get("my-form-put", function () {
//     return view("form/put-form");
// });
// Route:: put("home", function (Request $request) {
//     dd($request->input('fname'));
// });


// Route::get("my-form-post", function () {
//     return view("form/post-form");
// });
// Route:: post("home", function (Request $request) {
//     dd($request->input('fname'));
// });


// Route::get("my-form-delete", function () {
//     return view("form/delete-form");
// });
// Route:: delete("home", function () {
//     return 'delete method' ;
// });


// Route::get("my-form-patch", function () {
//     return view("form/patch-form");
// });
// Route:: patch("home", function () {
//     return 'patch method' ;
// });


Route::view('pages/employee/employee-form', 'pages.employee.employee-form');
Route::post('employee-details', function (Request $request) {
    $data = $request->all();
    return view('pages.employee.employee-details', [
        'id' => $data['id'],
        'name' => $data['name'],
        'age' => $data['age'],
        'number' => $data['phone'],
        'nic' => $data['nic']
    ]);
});

Route::view('home', 'home');

Route::view('form/input', 'form.input');

// Route::post('submit-input' , function (Request $request) {
//     dd (request()->all());

// });

// Route::post ('submit-receive' , function (Request $request) {
//     $data = $request->all();
//     return view('form.receive', [
//         'text' => $data['text'],
//          'password' => $data['password'],
//         'email' => $data['email'],
//         'time' => $data['time'],
//         'date' => $data['date'],
//         'datetime' => $data['datetime'],




//     ])->with('success', 'Form submitted successfully!');
//     });

// Route::post('submit-receive' , function (Request $request){
//     $data = $request->all();
//     return view('form.receive', [
//         'text' => $data['text'] ?? '',
//         'password' => $data['password'] ?? '',
//         'email' => $data['email'] ?? '',
//         'time' => $data['time'] ?? '',
//         'date' => $data['date'] ?? '',
//         'datetime' => $data['datetime'] ?? '',
//         'gender' => $data['gender'] ?? '',
//         'subject' => $data['Subject'] ?? [],
//         'search' => $data['search'] ?? '',
//
//     ])->with('success', 'Form submitted successfully!');
// });

Route::post('submit-receive' , function (Request $request){
    return view('form.receive', $request->all());
});

// Route::post('submit-receive', function (Request $request) {
//     $data = $request->all();
//     return view('form.receive', [
//     'text' => $data['text'] ?? '',
//     'password' => $data['password'] ?? '',
//     'email' => $data['email'] ?? '',
//     'time' => $data['time'] ?? '',
//     'date' => $data['date'] ?? '',
//     'datetime' => $data['datetime'] ?? '',
//     'gender' => $data['gender'] ?? '',
//     'subject' => $data['Subject'] ?? [],
//     'search' => $data['search'] ?? '',
//     'select' => $data['select'] ?? [],
//     ])->with('success', 'Form submitted successfully!');
//     });


//--17/7/2025--

Route::view('layouts/master', 'layouts.master');




