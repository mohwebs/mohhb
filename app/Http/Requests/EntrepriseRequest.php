<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntrepriseRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            //'logo' => 'image',
            'datefoundation' => 'required|date',
            'tel' => 'required|string|max:10',

            'email' => 'required|string|email|max:255',
            //'password' => 'required|string|min:6|confirmed',
        ];
    }
}
