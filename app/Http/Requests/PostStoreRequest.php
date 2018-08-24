<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Controllers;
class PostStoreRequest extends FormRequest
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
        $rules = [
            'titulo' => 'required|unique:posts,title|max:60',
            'descripcion' => 'required|max:120',
            'contenido' => 'required',
            'autor' => 'required',           
            'category_id' => 'required',
            'file'=>'required|mimes:jpeg,jpg,png',
        ];

        
        return $rules;
    }
}
