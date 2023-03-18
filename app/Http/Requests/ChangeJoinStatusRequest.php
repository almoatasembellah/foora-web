<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ChangeJoinStatusRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'game_id' => ['required' , Rule::exists('games' , 'id')],
            'user_id' => ['required' , Rule::exists('users' , 'id')],
            'status' => ['required' , Rule::in([0,1,2])]
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
