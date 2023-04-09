<?php

namespace App\Http\Requests\Api\Join;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CancelJoinRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'game_id' => ['required' , Rule::exists('games' , 'id')],
            'user_id' => ['required' , Rule::exists('users' , 'id')],

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
