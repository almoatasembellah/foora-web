<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminLoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => ['required' , 'email' , Rule::exists('admins' , 'email')],

            'password' => ['required' , 'min:8'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
