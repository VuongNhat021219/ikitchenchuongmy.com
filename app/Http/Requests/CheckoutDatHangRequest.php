<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutDatHangRequest extends FormRequest
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
            'name' => 'required|min:5|max:50',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'phone.required' => 'Bạn không được bỏ trống tên sản phẩm',
            'address.required' => 'Bạn không được bỏ trống ',
            'email.required' => 'Bạn không được bỏ trống',
            'name.required' => 'Bạn không được bỏ trống tên sản phẩm',
            'name.min' => 'Tên phải lớn hơn 5 ký tự',
            'name.max' => 'Tên không được vượt quá 50 ký tự',
            

        ];
    }
}
