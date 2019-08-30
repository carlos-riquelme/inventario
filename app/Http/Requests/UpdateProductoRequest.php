<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductoRequest extends FormRequest
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
            'SKU' => 'required|numeric', //numerico
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:0',
            'stock_minimo' => 'required|numeric|min:0',
            'descripcion' => 'required',
            'proveedor' => 'required',
            'fecha_adq' => 'required|date|before:tomorrow',
            'fecha_exp' => 'required|date|after:today',
            'familia' => 'required',
            'categoria' => 'required',
            'vigente' => 'required|boolean',
            'presentacion' => 'required',
            'receta' => 'required|boolean',

        ];
    }

    public function messages() {
        return [
            'required' => ':attribute es un campo obligatorio.',
            'numeric' => ':attribute debe ser un número.',
            'min' => ':attribute debe ser mayor a 0',
            'fecha_adq.before' => 'La fecha de adquisición debe ser anterior al día de hoy.',
            'fecha_exp.after' => 'La fecha de expiración debe ser posterior al día de hoy.'
        ];
    }
}
