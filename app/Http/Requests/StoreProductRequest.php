<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'content' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images1' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images2' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images3' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'price_sale' => 'required',
            'cate_id' => 'required',
            'description' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn không được bỏ trống tên sản phẩm',
            'name.min' => 'Tên phải lớn hơn 5 ký tự',
            'name.max' => 'Tên không được vượt quá 50 ký tự',
            'content.required' => 'Bạn không được bỏ trống mô tả ngắn cho sản phẩm',
            'image.required' => 'Hình ảnh không được bỏ trống',
            'images1.required' => 'Hình ảnh phụ không được bỏ trống',
            'images2.required' => 'Hình ảnh phụ không được bỏ trống',
            'images3.required' => 'Hình ảnh phụ không được bỏ trống',
            'image.image' => 'Không phải hình ảnh',
            'image.mimes' => 'Không đúng định dạng hình ảnh, ảnh cho phép tải lên là: jpeg,png,jpg,gif,svg|max:2048',
            'price.required' => 'Bạn không được bỏ trống giá sản phẩm',
            'price_sale.required' => 'Bạn không được bỏ trống giá sản phẩm',
            'cate_id.required' => 'Bạn không được bỏ trống tên danh mục sản phẩm',
            'description.required' => 'Bạn không được bỏ trống mô tả chi tiết',
            'images3.mimes' => 'Không đúng định dạng hình ảnh, ảnh cho phép tải lên là: jpeg,png,jpg,gif,svg|max:2048',
            'images2.mimes' => 'Không đúng định dạng hình ảnh, ảnh cho phép tải lên là: jpeg,png,jpg,gif,svg|max:2048',
            'images1.mimes' => 'Không đúng định dạng hình ảnh, ảnh cho phép tải lên là: jpeg,png,jpg,gif,svg|max:2048',
            'images1.image' => 'Không phải hình ảnh',
            'images2.image' => 'Không phải hình ảnh',
            'images3.image' => 'Không phải hình ảnh',

        ];
    }
}
