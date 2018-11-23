<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tipo' => [
                'required',
                Rule::in(['Normal','Reserva'])
            ],
            'nombre' => 'required',
            'editorial' => 'required',
            'ano' => 'required',
            'ubicacion' => 'required',
            'autor' => 'required',
            'area' => 'required',
            'prestamo' => 'required'
        ];

           
    }

    public function messages()
    {
        return [
            'tipo.required' => 'El campo Tipo es requerido',
            'tipo.in' => 'El valor del campo tipo no es válido',

            'nombre.required' => 'El campo Tipo es requerido',
            'editorial.required' => 'El campo Tipo es requerido',
            'ano.required' => 'El campo Tipo es requerido',
            'ubicacion.required' => 'El campo Tipo es requerido',
            'autor.required' => 'El campo Tipo es requerido',
            'area.required' => 'El campo Tipo es requerido',
            'prestamo.required' => 'El campo Tipo es requerido',


        ];
    }
}
