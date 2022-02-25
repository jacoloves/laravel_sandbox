<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16pt; colot:#999; }
h1 { font-size:100pt; text-align: right; color:#eee; margin: -40px 0px -50px 0px; }
</style>
</head>
<body>
    <h1>Hello</h1>
    <p>This is sample page.</p>
    <p>これは、サンプルで作ったページです。</p>
</body>
</html>
EOF;

Route::get('hello2', function () use ($html){
    return $html;
});

Route::get('hello3/{msg?}', function ($msg='no message.'){
    $html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16pt; colot:#999; }
h1 { font-size:100pt; text-align: right; color:#eee; margin: -40px 0px -50px 0px; }
</style>
</head>
<body>
    <h1>Hello</h1>
    <p>{$msg}</p>
    <p>これは、サンプルで作ったページです。</p>
</body>
</html>
EOF;

    return $html;
});

//Route::get('hello4', 'App\Http\Controllers\HelloController@index');
//Route::get('hello4/other', 'App\Http\Controllers\HelloController@other');

Route::get('hello6', 'App\Http\Controllers\HelloController@index');

// chapter3

Route::get('hello7', function() {
    return view('hello.index');
});

Route::get('hello8', 'App\Http\Controllers\Chapter3HelloController@index');
//Route::post('hello8', 'App\Http\Controllers\Chapter3HelloController@post');

// chapter4
Route::get('hello9', 'App\Http\Controllers\Chapter4HelloController@index')->middleware('helo');

Route::get('hello10/cookie', 'App\Http\Controllers\Chapter4HelloController@index');
Route::post('hello10/cookie', 'App\Http\Controllers\Chapter4HelloController@post');

// chapter5
Route::get('hello11', 'App\Http\Controllers\Chapter5HelloController@index');
Route::get('hello11/add', 'App\Http\Controllers\Chapter5HelloController@add');
Route::post('hello11/add', 'App\Http\Controllers\Chapter5HelloController@create');

Route::get('hello11/edit', 'App\Http\Controllers\Chapter5HelloController@edit');
Route::post('hello11/edit', 'App\Http\Controllers\Chapter5HelloController@update');

Route::get('hello11/del', 'App\Http\Controllers\Chapter5HelloController@del');
Route::post('hello11/del', 'App\Http\Controllers\Chapter5HelloController@remove');

Route::get('hello11/show', 'App\Http\Controllers\Chapter5HelloController@show');

// chapter6
Route::get('person', 'App\Http\Controllers\PersonController@index');

Route::get('person/find', 'App\Http\Controllers\PersonController@find');
Route::post('person/find', 'App\Http\Controllers\PersonController@search');

Route::get('person/add', 'App\Http\Controllers\PersonController@add');
Route::post('person/add', 'App\Http\Controllers\PersonController@create');

Route::get('person/edit', 'App\Http\Controllers\PersonController@edit');
Route::post('person/edit', 'App\Http\Controllers\PersonController@update');

Route::get('person/del', 'App\Http\Controllers\PersonController@delete');
Route::post('person/del', 'App\Http\Controllers\PersonController@remove');

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function(){
    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
});
