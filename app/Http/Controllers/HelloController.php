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
    public function index()
    {
        $data = ['msg' => 'これはコントローラーから渡されたメッセージです。'];
        return view('hello.index', $data);
    }
}
