<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\ValidationRule;
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name'=>['required','min:1'],
            'description'=>['required','min:8'],
            'image'=>['nullable','image','mimes:png,jpg,jpeg,guf,webp','max:2048'],
            'category_id'=>['required','exists:categories,id']
        ];
    }
}
