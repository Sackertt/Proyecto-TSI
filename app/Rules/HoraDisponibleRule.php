<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\DB;

class HoraDisponibleRule implements DataAwareRule, ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    protected $data = [];
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $servicio = $this->data;
        $cantidad = DB::table('horas_esteticas')->where('fecha_servicio', $servicio['fecha'])->where('hora_servicio', $servicio['hora'])->whereNotIn('estado', ["Supendida","Usuario Eliminado"])->get();
        if(count($cantidad) > 0){
            $fail('Hora no disponible: {{$servicio->fecha_servicio}} {{$servicio->hora_servicio}}');
        }
    }
    public function setData(array $data): static
    {
        $this->data = $data;
 
        return $this;
    }
}
