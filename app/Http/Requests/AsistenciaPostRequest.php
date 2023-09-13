<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsistenciaPostRequest extends FormRequest
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
            'nombres' =>'required',
            'apellidos' => 'required',
            'codAlumno' =>'required',
            'curso_id'   =>'required',
            'fecha' =>'date',
            'coordX' => ['required','string'],
            'coordY'=> ['required','string'],
            'valor'=>['required'],
        ];
    }
}
