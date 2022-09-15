<?php

namespace App\Http\Controllers;

// 追加されることで処理実行前にバリデーションが実行される
use App\Http\Requests\Chapter4Request;
use Illuminate\Http\Request;
use Validator;

class Chapter4Controller extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->query(), [
            'id' => 'required',
            'pass' => 'required',
        ]);
        if ($validator->fails()) {
            $msg = 'クエリに問題があります';
        } else {
            $msg = 'ID/PASSを受け付けました。フォームを入力ください。';
        }
        return view('chapter4.index', ['msg' => $msg,]);
    }

    public function post(Request $request)
    {
        // バリデーションの設定
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ]);
        // バリデーションに失敗したときに実行される
        if ($validator->fails()) {
            // リダイレクトして、エラ〜メッセージを表示して、入力されていた値を引き継ぐ
            return redirect('/chapter4')->withErrors($validator)->withInput();
        }
        return view('chapter4.index', ['msg' => '正しく入力されました!']);
    }
}
