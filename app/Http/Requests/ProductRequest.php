<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    
    /**public function authorize()
    {
        return false;
    }
    */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'product.category_id' => 'required',
            'product.name' => 'required|string|max:20',
            'product.description' => 'required|string|max:3000',
            'product.price' => 'required|numeric|digits_between:1,23',
            'product.amount' => 'required|integer|min:1|max:100',
            'product.main_image' => 'nullable|image',
        ];
    }
}
