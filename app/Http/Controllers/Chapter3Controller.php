<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Chapter3Controller extends Controller
{
    public function index()
    {
        $data = [
            'msg' => 'これはコントローラーから渡されたメッセージです。',
            'array' => ['one', 'two', 'three', 'four', 'five']
        ];
        return view('chapter3.index', $data);
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
