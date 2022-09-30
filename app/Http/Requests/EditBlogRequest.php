<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditBlogRequest extends FormRequest
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
            'title' => 'required|min:5|max:50',
            'content' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_sub' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Bạn không được bỏ trống trường này',
            'title.min' => 'Tên phải lớn hơn 5 ký tự',
            'title.max' => 'Tên không được vượt quá 50 ký tự',
            'content.required' => 'Bạn không được bỏ trống mô tả ngắn cho sản phẩm',
            'title_sub.required' => 'Bạn không được bỏ trống trường này',
           
        ];
    }
}
