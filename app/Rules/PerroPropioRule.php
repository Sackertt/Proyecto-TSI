<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PerroPropioRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $mascotas = DB::table('mascotas')->where('rut',Auth::user()->rut)->where('id_mascota',$value)->get();
        if(count($mascotas)==0){
            $fail('Ingrese una Mascota Propia');
        }
    }
}
