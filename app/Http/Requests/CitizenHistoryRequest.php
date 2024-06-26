<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CitizenHistoryRequest extends FormRequest
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
            'firstname' => 'required|string',
            'middle_name' => 'nullable|string',
            'lastname' => 'required|string',
            'suffix' => 'nullable|string',
            'medicine' => 'required|string',
            'services' => 'required|string',
            'address' => 'required|string',
            'date' => 'required|date',
        ];
    }
}
