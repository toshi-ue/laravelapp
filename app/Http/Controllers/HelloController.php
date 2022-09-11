<?php

// 名前空間。
// このディレクトリ配下にある
namespace App\Http\Controllers;

// use
// 記述されているディレクトリのパッケージ(Illuminate\Http)のRequestを使えるようにする記述
use Illuminate\Http\Request;
use Illuminate\Http\Response;


// クラスの定義
class HelloController extends Controller
{
    // アクション
    //  コントローラに追加される処理のこと
    public function index(Request $request, Response $response)
    {
        $html = <<< EOF
<html>
<head>
    <title>Hello/Index</title>
</head>
<style>

</style>
<body>
    <h1>Index</h1>
    <p>このページはHelloコントローラーのindexアクションです</p>
    <h3>Request</h3>
    <pre>{$request}</pre>
    <h3>Response</h3>
    <pre>{$response}</pre>
</body>
</html>
EOF;

        $response->setContent($html);
        return $response;
    }
}
