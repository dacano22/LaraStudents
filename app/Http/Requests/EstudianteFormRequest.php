<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudianteFormRequest extends FormRequest
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
            'Documento' => 'required',
            'Nombre' => 'required',
            'Apellido' => 'required',
            'Genero' => 'required',
            'FechaIngreso' => 'required',
            'FechaNacimiento' => 'required',
            'DireccionResidencia' => 'required',
            'NombrePadre' => 'required',
            'NombreMadre' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'Documento.required' => 'El documento es un campo requerido',
            'Nombre.required' => 'El nombre es un campo requerido',
            'Apellido.required' => 'El apellido es un campo requerido',
            'Genero.required' => 'El género es un campo requerido',
            'FechaIngreso.required' => 'La fecha de ingreso es un campo requerido',
            'FechaNacimiento.required' => 'La fecha de nacimiento es un campo requerido',
            'DireccionResidencia.required' => 'La dirección de residencia es un campo requerido',
            'NombrePadre.required' => 'El nombre del padre es un campo requerido',
            'NombreMadre.required' => 'El nombre de la madre es un campo requerido',
        ];
    }
}
