<?php

namespace App\Http\Controllers;

// 追加されることで処理実行前にバリデーションが実行される
use App\Http\Requests\Chapter4Request;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class Chapter4Controller extends Controller
{
    public function index(Request $request)
    {
        return view('chapter4.index', ['msg' => 'フォームを入力してください',]);
    }

    public function post(Chapter4Request $request)
    {
        dd('e');
        // ddd($request);
        return view('chapter4.index', ['msg' => '正しく入力されました!']);
    }
}
