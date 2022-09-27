<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Chapter4Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // フォームリクエストの利用の許可
    public function authorize()
    {
        if ($this->path() == 'chapter4') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    // 適用されるバリデーションルールの検証ルールの設定
    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|chapter4',
        ];
    }

    public function messages()
    {
        // ddd('c');
        return [
            'name.required' => '名前は必ず入力してください',
            'mail.email' => 'メールアドレスが必要です。',
            'age.numeric' => '年齢を正数でご記入ください',
            'age.chapter4' => 'chapter4! 入力は偶数のみ受け付けます',
        ];
    }
}
