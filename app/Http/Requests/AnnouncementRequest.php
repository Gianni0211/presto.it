<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementRequest extends FormRequest
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
            'title' => "required|max:120|min:3",
            'body' => "required|max:1000|min:10",
            'price' => "required",
        ];
    }
    
    public function messages()
    {
        return [
            'title.required' => "Il titolo è obbligatorio",
            'title.max' => "Il titolo è troppo lungo",
            'title.min' => "Il titolo è troppo corto",
            'body.required' => "La descrizione è obbligatoria",
            'body.max' => "La descrizione è troppo lunga",
            'body.min' => "La descrizione è troppo corta",
            'price.required' => "Il prezzo è obbligatorio",
          
        ]; 
    }
}
