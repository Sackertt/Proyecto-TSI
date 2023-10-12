<?php

namespace App\Http\Requests;

use App\Rules\ValidadorRutRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            // campo => restricciones
            'rut'=> ['required','max:10','min:9','unique:usuarios,rut','regex:/^(\d{7,8}-[\dkK])$/', new ValidadorRutRule],
            'password'=> 'required|max:200|same:password2',
            'nombre' => 'required|max:20|min:1',
            'fono' => 'required|max:9|min:9',
            'direccion' => 'required|max:30|min:5'
            
        ];
    }
    public function messages():array
    {
        //'campo.regla'=>'mensaje'
        return [
            'rut.required'=>'Ingrese un rut',
            'rut.max'=>'Escriba un rut con el siguiente Formato XXXXXXXX-X',
            'rut.min'=>'Escriba un rut con el siguiente Formato XXXXXXXX-X',
            'rut.unique'=>'Rut en uso XD',
            'rut.regex'=> 'Ingrese su rut sin puntos y con guion',
            // ''=>'',
            'password.required'=>'Ingrese una contraseña',
            'password.same'=>'Ingrese la misma contraseña en ambos campos',

            'nombre.required'=>'Indique su nombre',
            'nombre.max'=>'Nombre demasiado extenso',

            'fono.required'=>'Ingresa tu numero telefonico',
            'fono.max'=>'Ingrese un telefono con el siguiente formato 9XXXXXXXX',
            'fono.min'=>'Ingrese un telefono con el siguiente formato 9XXXXXXXX',
            
            'direccion.required'=>'Ingrese la direccion donde vive actualmente',
            'direccion.max'=>'Ingrese la direccion de manera mas breve',
            'direccion.min'=>'Ingrese la direccion donde vive actualmente',
        ];
    }
}
