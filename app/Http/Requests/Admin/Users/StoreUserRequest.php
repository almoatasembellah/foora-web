<?php

namespace App\Http\Requests\Admin\Users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'age' => ['required', 'string'],
            'height' =>['required', 'string'],
            'weight'=>['required', 'string'],
            'phone' => ['required', 'string', 'max:11','unique:users'],
            'role_id' => ['required' , Rule::exists('roles' , 'id')],
            'city_id' => ['required' , Rule::exists('cities' , 'id')],
            'area_id' => ['required' , Rule::exists('areas' , 'id')],

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
