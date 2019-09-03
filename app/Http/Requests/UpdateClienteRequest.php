<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
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
            'nombre' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'comuna' => 'required',
            'telefono' => 'required',
            'email' => 'email'
        ];
    }

    public function messages() {

        return [
            'direccion.required' => 'la dirección es obligatoria',
            'required' => 'el :attribute es obligatorio',
            'email' => 'el correo electrónico debe ser válido'
        ];
    }
}
