<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
        $isRequired = request()->isMethod("POST") ?"required|": "";
        return [
            //
            'name' => $isRequired.'string',
			'slug' => $isRequired.'',
			'description' => $isRequired.'string',
			'stock' => $isRequired.'string',
			'soldePrice' => $isRequired.'string',
			'regularPrice' => $isRequired.'string',
			'imageUrls' => $isRequired.'array|max:5',
			'imageUrls.*' => 'image|mimes:webp,jpeg,png,jpg,gif|max:2048',
			'brand' => $isRequired.'string',
			'isIphone' => $isRequired.'in:true,false|nullable',
			'isSamsung' => $isRequired.'in:true,false|nullable',
			'isHuawei' => $isRequired.'in:true,false|nullable',
			'isAvailable' => $isRequired.'in:true,false|nullable',
            'categories' => $isRequired.'array|exists:categories,id',
			
        ];
    }
    public function prepareForValidation()
    {
        $this->merge([
            'slug' => \Illuminate\Support\Str::slug($this->input('name')),
			'isIphone' => $this->input('isIphone') ? 'true' : 'false',
			'isSamsung' => $this->input('isSamsung') ? 'true' : 'false',
			'isHuawei' => $this->input('isHuawei') ? 'true' : 'false',
			'isAvailable' => $this->input('isAvailable') ? 'true' : 'false',
			
        ]);
    }
}