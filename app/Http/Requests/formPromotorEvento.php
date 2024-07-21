<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formPromotorEvento extends FormRequest
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
            //

            'nome'=>'required',
            'data_nascimento'=>'required',
            'pais'=>'required',
            'provincia'=>'required',
            'municipio'=>'required',
            'bairro'=>'required',
            'codigo_postal'=>'required',
            'bilhete_identidade_anexo'=>'required',
            'nif'=>'required',
            'telefone'=>'required',
            'referencia'=>'required',
            'email'=>'required',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
        ];
    }

    public function messages(){
        return [
            'referencia.required' => 'O campo referência é obrigatório',
            'confirm_password.required' => 'O campo confirmar senha  é obrigatório',
            'confirm_password.same' => 'O campo confirmar senha e o campo senha devem corresponder',
        ];
    }
}
