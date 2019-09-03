<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMascotasRequest extends FormRequest
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
            'especie' => 'required',
            'raza' => 'required',
            'sexo' => 'required|boolean',
            'tratamiento' => 'boolean',
            'fecha_nacimiento' => 'required|date_format:Y-m-d|before:tomorrow'
        ];
    }

    public function messages() {
        return [
            'nombre.required' => 'El :attribute es obligatorio',
            'sexo.required' => 'El :attribute es obligatorio',
            'fecha_nacimiento.before' => 'La fecha de nacimiento debe ser anterior a mañana',
            'required' => 'La :attribute es obligatoria'
        ];
    }
}
