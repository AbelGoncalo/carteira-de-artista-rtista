<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formCasaEventos extends FormRequest
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
            'nome' => 'required',
            'municipio' => 'required',
            'bairro' => 'required',
            'ponto_referencia' => 'required',
            'nif' => 'required',
            'documentos' => 'required',
            'telefone' => 'required',
            'foto_ilustrativa_espaco' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ];
    }

    public function messages(){
        return [
            'confirm_password.same' => 'Os campos senha e confirmar senha devem corresponder',
           'confirm_password.required' => "O campo confirmar senha é obrigatório",
        ];
    }

}
