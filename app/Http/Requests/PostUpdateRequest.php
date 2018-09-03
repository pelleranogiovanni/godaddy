<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'titulo' => 'required|sunique:posts,title|max:60',
            'descripcion' => 'required|max:120',
            'contenido' => 'required',
            'autor' => 'required',           
            'category_id' => 'required',
            'file'=>'required|mimes:jpeg,jpg,png',
        ];

        
        return $rules;
    }
}
