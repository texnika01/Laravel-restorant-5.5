<?php

namespace App\Http\Requests\Backend\PageRequest;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:6|unique:menus',
			'menu' => 'required|min:6',
			'price' => 'required|numeric|between:0,99.99',
			'image' => 'required|mimes:jpeg',
        ];
    }
}
