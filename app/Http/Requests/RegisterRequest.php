<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],

            'email' => ['required' , 'email' , Rule::unique('users' , 'email')],

            'password' => ['required' , 'min:8'],


            'age' => ['required' , 'numeric' , 'min:16'],

            'weight' => ['required'],

            'height' => ['required'],

            'phone' => ['required' , 'numeric' , 'min:11'],

            'image' => ['nullable']

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
