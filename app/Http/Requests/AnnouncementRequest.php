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
            'title' => "required|max:120",
            'body' => "required|max: 1000",
        ];
    }
    public function messages(){
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max:120' => 'Il titolo è troppo lungo',
            'body.required' => 'La descrizione è obbligatoria',
            'body.max:1000' => 'La descrizione è troppo lunga'


        ];
    }

}
