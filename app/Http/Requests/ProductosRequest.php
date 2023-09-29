<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductosRequest extends FormRequest
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
            'nombre'=> 'required|max:40|unique:productos,nombre_producto',
            'precio'=> 'required|numeric',
            'descripcion' => 'required|max:200',
            'imagen' => 'required|image',
            'tipo' => 'required|exists:tipos_productos,id_tipo'
            
        ];
    }

    public function messages():array
    {
        //'campo.regla'=>'mensaje'
        return [
            'nombre.required'=>'Indique el nombre del producto',
            'nombre.max'=>'Nombre de producto demasiado extenso',
            'nombre.unique'=>'Producto existente con este nombre',
            
            'precio.required'=>'Indique precio de producto',
            'precio.numeric'=>'Solo numeros en el campo precio.',

            'descripcion.required' => 'Indique una descripcion del producto',
            'descripcion.max' =>'Descripción muy larga.',

            'imagen.required' => 'Ingrese una imagen del producto.',
            'imagen.image'  => 'El archivo debe ser un formato valido (jpg o png).',
            
            'tipo.required' => 'Seleccione un tipo de producto.',
            'tipo.exists'    => "Tipo no valido."
        ];
    }
}
