<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidadorRutRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $dv = strtoupper(substr($value,strlen($value)-1));
        $rut = substr($value,0,strlen($value)-2);

        $factor = 2;
        $suma = 0;
        for($i=strlen($rut)-1;$i>=0;$i--){
            $suma += $rut[$i]*$factor++;
            if($factor>7){
                $factor = 2;
            }
        }
        $dvCalc = 11-$suma%11;
        $dvCalc = $dvCalc==11?0:($dvCalc==10?'K':$dvCalc);
        
        if($dv != $dvCalc){
            $fail('Rut no valido');
        }

    }
}
