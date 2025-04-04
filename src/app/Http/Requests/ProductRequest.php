<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'sku' => 'required|string|max:100|unique:products,sku',
            'price' => 'required|numeric|min:0',
            'image' => 'image|mimes:jpg,png,jpeg|max:2048',
        ];
    }
    
    /**
     * Method messages
     *
     * @return array
     */
    // public function messages(): array
    // {
    //     return [
    //         'name.required' => 'Tên sản phẩm là bắt buộc.',
    //         'sku.required' => 'SKU là bắt buộc.',
    //         'sku.unique' => 'SKU đã tồn tại.',
    //         'price.required' => 'Giá là bắt buộc.',
    //         'price.numeric' => 'Giá phải là số.',
    //     ];
    // }
}
