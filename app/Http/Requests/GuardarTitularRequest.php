<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarTitularRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'tipoDoc' => 'required' ,
            'numDoc' => 'required|min:5|max:254|unique:titular' ,
            'nombre1' => 'required' ,
            //nombre2 Opcional
            'apellido1' => 'required',
            //apellido2 Opcional
        ];
    }

    public function messages() {
        return [
            'tipoDoc.required' => 'Hola :attribute no válido',
        ];

    
    }
    public function attributes() 
    {
        return [
            'tipoDoc ' => 'Tipo de Documento',
        ];
    }
}
