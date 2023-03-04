<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],

            'email' => ['required' , 'email' , Rule::unique('users')->ignore($this->user()->id)],


            'age' => ['required' , 'numeric' , 'min:16'],

            'weight' => ['required'],

            'height' => ['required'],

            'phone' => ['required' , 'numeric' , 'min:11']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
