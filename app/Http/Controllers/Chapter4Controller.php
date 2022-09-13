<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Chapter4Controller extends Controller
{
    public function index(Request $request)
    {
        return view('chapter4.index');
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
