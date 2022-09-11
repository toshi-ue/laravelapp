<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
});

$html = <<<EOF
<html>
<head>
    <title>Hello</title>
</head>
<style>

</style>
<body>
    <h1>Hello</h1>
    <p>This is a sample page.</p>
</body>
EOF;


Route::get('hello2', function () use ($html) {
    return $html;
});

Route::get('hello/{msg}', function ($msg) {
    $html = <<<EOF
<html>
<head>
    <title>Hello</title>
</head>
<style>

</style>
<body>
    <h1>Hello</h1>
    <p>{$msg}</p>
    <p>This is a sample page.</p>
</body>
EOF;
    return $html;
});
