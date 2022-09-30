<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email:rfc,dns',
            'password' =>'required'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Trường Này Không Được Phép Trống',
            'email.email' => 'Không Đúng Định Dạng Email',
            'password.required' => 'Trường Này Không Được Phép Trống',
            // 'password.min' => 'Phải Lớn Hơn 8 Ký Tự'
        ];
    }
}
