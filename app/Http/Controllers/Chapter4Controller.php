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
        $rules = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric',
        ];
        $messages = [
            'name.required' => '名前は必ず入力してください',
            'mail.email' => 'メールアドレスが必要です',
            'age.numeric' => '年齢を正数で記入ください',
            'age.min' => '年齢は0歳以上で記入してください',
            'age.max' => '年齢は""00歳以下で記入してください',
        ];
        // バリデーションの設定
        $validator = Validator::make($request->all(), $rules, $messages);

        $validator->sometimes('age', 'min:0', function ($input) {
            return is_numeric($input->age);
        });

        $validator->sometimes('age', 'max:0', function ($input) {
            return is_numeric($input->age);
        });

        // バリデーションに失敗したときに実行される
        if ($validator->fails()) {
            // リダイレクトして、エラ〜メッセージを表示して、入力されていた値を引き継ぐ
            return redirect('/chapter4')->withErrors($validator)->withInput();
        }
        return view('chapter4.index', ['msg' => '正しく入力されました!']);
    }
}
