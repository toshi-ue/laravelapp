<?php

// 名前空間。
// このディレクトリ配下にある
namespace App\Http\Controllers;

// use
// 記述されているディレクトリのパッケージ(Illuminate\Http)のRequestを使えるようにする記述
use Illuminate\Http\Request;

// クラスの定義
class HelloController extends Controller
{
    // アクション
    //  コントローラに追加される処理のこと
    public function index($id = 'noname', $pass = 'unknown')
    {
        return
            <<< EOF
<html>
<head>
    <title>Hello/Index</title>
</head>
<style>

</style>
<body>
    <h1>Index</h1>
    <p>これはHelloコントローラーのindexアクションです</p>
    <ul>
        <li>ID: {$id}</li>
        <li>PASS: {$pass}</li>
    <ul>
</body>
</html>
EOF;
    }
}
