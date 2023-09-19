<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MascotasEditRequest extends FormRequest
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
            'tamaño' => ['required','max:10',Rule::in(['Pequeño','Mediano','Grande','Muy Grande'])]
        ];
    }
    public function messages():array
    {
        //'campo.regla'=>'mensaje'
        return [
            'tamaño.required'=>'Seleccione el tamaño de su mascota',
            'tamaño.max'=>'Seleccione un tamaño valido',
            'tamaño.in'=>'Seleccione un tamaño valido',
        ];
    }
}
