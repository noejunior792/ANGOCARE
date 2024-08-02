<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FinanciamentoRequest extends FormRequest
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
            'valores' => 'required|numeric',
            'motivo' => 'required',
            'titulo' => 'required',
            'categoria' => 'required',
            'users_id' => 'required|exists:users,id',
            'estado' => 'integer',
            'descisao' => 'nullable',
        ];
    }
}
