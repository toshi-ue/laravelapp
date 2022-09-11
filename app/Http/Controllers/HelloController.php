<?php

// 名前空間。
// このディレクトリ配下にある
namespace App\Http\Controllers;

// use
// 記述されているディレクトリのパッケージ(Illuminate\Http)のRequestを使えるようにする記述
use Illuminate\Http\Request;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<< EOF
<style>
body {font-size:16pt; color:#999;}
h1 {font-size:100pt; text-align:right; color:#eee; margin: -40px 0px -50px 0px;}
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag, $txt)
{
    return "<{$tag}>" . $txt . "</{$tag}>";
}

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
    </ul>
    <p><a href="/hello/other">go to other page</a></p>
</body>
</html>
EOF;
    }

    public function other()
    {
        global $head, $style, $body, $end;

        $html = $head . tag('title', 'Hello/other') . $style . $body . tag('h1', 'other') . tag('p', 'this is other page') .  $end;

        return $html;
    }
}
