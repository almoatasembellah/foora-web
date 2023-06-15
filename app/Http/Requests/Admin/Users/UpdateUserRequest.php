<?php

namespace App\Http\Requests\Admin\Users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users' , 'email')->ignore($this->user->id)],
            'age' => ['required', 'string'],
            'height' =>['nullable', 'string'],
            'weight'=>['nullable', 'string'],
            'password' => ['nullable'],
            'phone' => ['required', 'string', 'max:11','unique:users,email,'.$this->user->id],
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
