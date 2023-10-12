<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MascotasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|max:20',
            'tamaño' => ['required','max:10',Rule::in(['Pequeño','Mediano','Grande','Muy Grande'])],
            'tipo_mascota' => ['required','max:15',Rule::in(['Perro', 'Gato', 'Conejo'])],
        ];
    }
    public function messages():array
    {
        //'campo.regla'=>'mensaje'
        return [
            'nombre.required'=>'Indique el nombre de su mascota',
            'nombre.max'=>'Nombre muy extenso',

            'tamaño.required'=>'Seleccione el tamaño de su mascota',
            'tamaño.max'=>'Seleccione un tamaño valido',
            'tamaño.in'=>'Seleccione un tamaño valido',
            
            'tipo_mascota.required'=>'Seleccione el tipo de su mascota',
            'tipo_mascota.in'=>'Tipo de mascota no valido',
        ];
    }
}
