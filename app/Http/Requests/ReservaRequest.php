<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'type'	=>	'required|exists:rooms,type',
            'tipo_pago'	=>	'required|exists:pagos,tipo_pago',
            'total_pago'	=>	'required',
            'nombre'	=>	'required|exists:clientes,nombre',
            'inicio'	=>	'required|min:9',
            'cant_dias'	=>	'required|min:1',
            'cant_hab'	=>	'required|min:1'
        ];
    }
}
