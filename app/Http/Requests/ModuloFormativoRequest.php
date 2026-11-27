<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ModuloFormativoRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'codigo_ciclo' => ['required', 'string', 'max:50', 'regex:/^[A-Z0-9_-]+$/i'],
            'nombre' => ['required', 'string', 'max:255'],
            'codigo' => ['required', 'string', 'max:50', 'regex:/^[A-Z0-9_-]+$/i'],
            'horas_totales' => ['required', 'integer', 'min:1', 'max:2000'],
            'curso_escolar' => ['nullable', 'in:PRIMERO,SEGUNDO'],
            'centro' => ['nullable', 'string', 'max:255'],
            'descripcion' => ['nullable', 'string']
        ];
    }

    // Mensajes propios de las normas estas
    public function messages(): array
    {
        return [
            'codigo_ciclo.required' => 'El codigo de ciclo del modulo es obligatorio.',
            'nombre.required' => 'El nombre del modulo es obligatorio.',
            'codigo.required' => 'El codigo del modulo es obligatorio.',
            'horas_totales.required' => 'El total de horas del modulo es obligatorio.',
            'horas_totales.integer' => 'Las horas totales deben ser un número entero.'
        ];
    }
}
