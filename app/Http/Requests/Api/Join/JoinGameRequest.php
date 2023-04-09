<?php

namespace App\Http\Requests\Api\Join;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class JoinGameRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'game_id' => ['required' , Rule::exists('games' , 'id')],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
