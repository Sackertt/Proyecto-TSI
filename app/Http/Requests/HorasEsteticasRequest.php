<?php

namespace App\Http\Requests;

use App\Rules\HoraDisponibleRule;
use App\Rules\PerroPropioRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'mascota' => ['required','exists:mascotas,id_mascota',new PerroPropioRule],
            'servicio' => ['required','exists:tipos_atenciones,id_atencion'],
            'fecha' => 'required|after:yesterday',
            'hora'=> ['required', Rule::in(['08:00','10:00','12:00','14:00','16:00','18:00']), new HoraDisponibleRule]
        ];
    }
    public function messages():array
    {
        //'campo.regla'=>'mensaje'
        return [
            'mascota.required'=>'El campo Mascota es obligatorio',
            'mascota.exists'=>'Seleccione una mascota',
            'servicio.required'=>"El campo Tipo Servicio es obligatorio",
            'servicio.exists'=>"Seleccione un tipo de servicio valido",
            'fecha.required'=>"Seleccione la fecha del servicio",
            'fecha.after' =>"Seleccione una fecha valida",
            'hora.required' => "Seleccione una Hora para el servicio",
            'hora.in' => "Seleccione un horario valido.",
        ];
    }
}
