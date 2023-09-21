<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioStoreUpdateFormRequest extends FormRequest
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
        $id = $this->id ?? ''; //bancos como postgres e mysql não aceitam campos nullos, escrevi essa linha para validar que o campo de edição aceite um email repetido se estiver sendo editado pelo próprio usuário

        $rules = [
            'nome' => [
                'required',
                'string',
                'max:255',
                'min:3'
            ],
            'email' => [
                'required',
                'email',
                "unique:usuario,email,{$id},id" //escrevi essa linha para validar que o campo de edição aceite um email repetido se estiver sendo editado pelo próprio usuário
            ],
            'perfil_usuario'=> [
                'required'
            ],

            'password' => [
                'required',
                'min:6',
                'max:15'
            ],
        ];

        if ($this->method('PUT')) {
            $rules['password'] = [
                'nullable',
                'min:6',
                'max:15'
            ];
        }

        return $rules;
    }
}
