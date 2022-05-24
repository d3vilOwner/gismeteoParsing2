<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterForm extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:2',
            'surname' => 'required|string|min:3',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|confirmed',
            'gender' => '',
            'bday' => 'date_format:D/m/y',
        ];
    }
}
