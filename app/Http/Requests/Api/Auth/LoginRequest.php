<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [

            'email' => ['required' , 'email' , Rule::exists('users' , 'email')],

            'password' => ['required' , 'min:8'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
