<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name' => 'required|min:4|max:50'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Bạn không được bỏ trống tên danh mục',
            'name.min' => 'Tên danh mục phải lớn hơn 4 ký tự',
            'name.max' => 'Tên danh mục không được vượt quá 50 ký tự',
        ];
    }
}
