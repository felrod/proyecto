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
          'name' => 'required | string | max:100',
          'price' => 'required | numeric|min:1|max:999999.99',
          'brand_id' => 'required | integer',
          'category_id' => 'required | integer',
          'status_id' => 'required | integer',
          'description' => 'required | string | max:500',
        ];
    }

    public function messages()
    {
        return [
          'required' => 'Campo obligatorio',
          'name.max' => 'Máximo 100 caracteres',
          'price.numeric' => 'Ingresa solo números',
          'price.min' => 'Precio mínimo: 1',
          'price.max' => 'Precio máximo: 999999.99',
          'integer' => 'Opción inválida',
          'description.max' => 'Máximo 1000 caracteres',
        ];
    }
}
