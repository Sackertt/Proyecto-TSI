<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarProductosRequest extends FormRequest
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
            'nombre'=> 'required|max:20',
            'precio'=> 'required|numeric',
            'descripcion' => 'required|max:100',
            'tipo' => 'required|exists:tipos_productos,id_tipo'
        ];
    }
    public function messages():array
    {
        //'campo.regla'=>'mensaje'
        return [
            'nombre.required'=>'Indique el nombre del producto',
            'nombre.max'=>'Nombre de producto demasiado extenso',
            
            'precio.required'=>'Indique precio de producto',
            'precio.numeric'=>'Solo numeros en el campo precio.',

            'descripcion.required' => 'Indique una descripcion del producto',
            'descripcion.max' =>'Descripción muy larga.',
            
            'tipo.required' => 'Seleccione un tipo de producto.',
            'tipo.exists'    => "Tipo no valido."
            

        ];
    }
}
