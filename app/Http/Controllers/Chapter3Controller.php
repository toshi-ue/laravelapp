<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Chapter3Controller extends Controller
{
    public function index()
    {
        // $data = [
        //     'msg' => 'これはコントローラーから渡されたメッセージです。',
        //     'array' => ['one', 'two', 'three', 'four', 'five']
        // ];

        // @eachによるコレクションビュー(@eachによる表示を利用する)
        $data = [
            ['name' => '山田たろう', 'mail' => 'taro@yamada'],
            ['name' => '田中はなこ', 'mail' => 'hanako@flower'],
            ['name' => '鈴木さちこ', 'mail' => 'sachico@happy']
        ];

        // return view('chapter3.index', ['data' => $data]);
        // ビューコンポーザを利用する
        return view('chapter3.index', ['data' => $data, 'message' => 'Hello']);
    }

    public function post(Request $request)
    {
        // $msg = $request->msg;
        // $data = [
        //     'msg' => 'こんにちは' . $msg .  'さん!',
        // ];
        // return view('hello.index', $data);
        return view('chapter3.index', ['msg' => $request->msg]);
    }
}
