<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HorasEsteticasRequest extends FormRequest
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
            'mascota' => 'required|exists:mascotas,id_mascota',
            'servicio' => 'required|exists:tipos_atenciones,id_atencion',
            'fecha' => 'required',
        ];
    }
    public function messages():array
    {
        //'campo.regla'=>'mensaje'
        return [
            'mascota.required'=>'El campo Mascota es obligatorio',
            'mascota.exists'=>'Seleccione una mascota',
            'servicio.required'=>"El campo Tipo Servicio es obligatorio",
            'servicio.exists'=>"Este tipo de atención no se encuentra registrado en la base de datos.",
            'fecha.required'=>"Seleccione la fecha del servicio",
        ];
    }
}
