<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistRequest extends FormRequest
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
        'nome_completo'=>'required',
        'nome_pai'=>'required',
        'nome_mae'=>'required',
        'data_nascimento'=>'required',
        'nacionalidade'=>'required',
        'nome_artistico'=>'required',
        'foto_meio_corpo'=>'required',
        'naturalidade'=>'required',
        'genero'=>'required',
        'estado_civil'=>'required',
        'telefone'=>'required',
        'email'=>'required|email|unique:artistas,email,'.$this->id,
        'endereco'=>'required',
        'numero_bi'=>'required',
        'bi_anexo'=>'required',
        'foto_meio_corpo'=>'required',
        'historial_artistico_anexo'=>'required',
        'declaracao_compromisso_honra_anexo'=>'required',
        'doc_filiacao_associacao_artista_anexo'=>'required',
        'fotos_palco'=>'required',
        'password'=>'required|min:8',
        'cpassword'=>'required|same:password|min:8',
      
        ];
    }
    public function messages(){
       return [
        'nome_completo.required'=>'Obrigatório',
        'nome_pai.required'=>'Obrigatório',
        'nome_mae.required'=>'Obrigatório',
        'data_nascimento.required'=>'Obrigatório',
        'nacionalidade.required'=>'Obrigatório',
        'naturalidade.required'=>'Obrigatório',
        'genero.required'=>'Obrigatório',
        'estado_civil.required'=>'Obrigatório',
        'telefone.required'=>'Obrigatório',
        'email.required'=>'Obrigatório',
        'email.email'=>'E-mail Inválido',
        'email.unique'=>'Já está a ser usado',
        'endereco.required'=>'Obrigatório',
        'numero_bi.required'=>'Obrigatório',
        'bi_anexo.required'=>'Obrigatório',
        'historial_artistico_anexo.required'=>'Obrigatório',
        'declaracao_compromisso_honra_anexo.required'=>'Obrigatório',
        'doc_filiacao_associacao_artista_anexo.required'=>'Obrigatório',
        'fotos_palco.required'=>'Obrigatório',
        'password.required'=>'Obrigatório',
        'password.min'=>'Deve ter pelomenos 8 caracteres',
        'cpassword.required'=>'Obrigatório',
        'cpassword.same'=>'Senhas Diferentes',
        'cpassword.min'=>'Deve ter pelomenos 8 caracteres',
       ];
    }
}
