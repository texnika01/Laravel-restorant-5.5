<?php

namespace App\Http\Requests\Backend\PageRequest;

use Illuminate\Foundation\Http\FormRequest;

class MenucategoruRequest extends FormRequest
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
            'name' => 'required|min:6|max:20|unique:categories',
			'description' => 'required|min:6|max:255',
        ];
    }
}
