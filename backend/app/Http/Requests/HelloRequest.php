<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'index') {
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
    public function rules()
    {
        return [
            //
            'name' => 'required',
            'age' => 'numeric|between:0,120',
            'mail' => 'email',
        ];
    }

    public function messages() {
        return [
            'name.required' => '名前は必ず入力してください。',
            'age.numeric'   => '年齢は整数で入力してください。',
            'age.between'   => '年齢は0〜120の間で入力してください。',
            'mail.email'    => 'メールアドレスの形式で入力してください。',
        ];
    }
}
