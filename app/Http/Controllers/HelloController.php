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
    public function index()
    {
        return <<<EOF
<html>
<head>
    <title>Hello</title>
</head>
<style>

</style>
<body>
    <h1>Index</h1>
    <p>これはHelloコントローラーのindexアクションです。</p>
</body>
</html>
EOF;
    }
}
