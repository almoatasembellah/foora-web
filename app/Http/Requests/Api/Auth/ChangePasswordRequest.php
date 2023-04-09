<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
