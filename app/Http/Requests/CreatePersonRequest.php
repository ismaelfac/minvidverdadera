<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonRequest extends FormRequest
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
            'dni' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'blood_type' => 'required',
            'email' => ['required', 'email'],
            'facebook' => ['nullable', 'url']
        ];
    }

    public function messages()
    {
        return [
            'dni.required' => 'El campo DNI es obligatorio',
            'first_name.required' => 'El campo nombre es obligatorio',
            'last_name.required' => 'El campo Apellido es obligatorio',
            'email.required' => 'El campo Email es obligatorio'
        ];
    }
}
