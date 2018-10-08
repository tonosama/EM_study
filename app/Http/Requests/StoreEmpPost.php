<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return true;
        if($this->path() == 'emp_add')
      {
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
              'emp_sid' => 'required|integer|unique:employees,emp_sid',
              'given_name' => 'required',
              'family_name' => 'required',
              'furi_given_name' => 'required|kana',
              'furi_family_name' => 'required|kana',
              'email' => 'nullable|email',
              'upfile' => 'nullable|image'

        ];
    }

    public function attributes()
    {
      return [
      'emp_sid' => '社員コード',
      'given_name' => '氏名（姓）',
      'family_name' => '氏名（名）',
      'furi_given_name' => 'フリガナ（セイ）',
      'furi_family_name' => 'フリガナ（メイ）',
      'email' => 'メールアドレス',
      'upfile' => 'プロフィール画像'

    ];
  }


  public function messages()
  {
    return [
      'emp_sid.unique' => '社員コードがすでに存在します。',
      'emp_sid.required' => '社員コードは、必須です。',
      'emp_sid.integer' => '社員コードは、数値のみです。',
      'given_name.required' => '氏名（姓）は、必須です。',
      'family_name.required' => '氏名（名）は、必須です。',
      'furi_given_name.required' => 'フリガナ（セイ）は、必須です。',
      'furi_given_name.kana' => 'フリガナ（セイ）は、全角カナのみです。',
      'furi_family_name.required' => 'フリガナ（メイ）は、必須です。',
      'furi_family_name.kana' => 'フリガナ（メイ）は、全角カナのみです。',
      'email.email' => 'メールアドレスを記入してください。',
      'upfile.image' => '画像ファイルをアップしてください。',
    ];


  }


}
