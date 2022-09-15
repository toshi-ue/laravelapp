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
            'age' => 'numeric|between:0,150'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください',
            'mail.email' => 'メールアドレスが必要です。',
            'age.numeric' => '年齢を正数でご記入ください',
            'age.between' => '年齢は0~150の間でご入力ください',
        ];
    }
}
