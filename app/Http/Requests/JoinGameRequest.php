<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class JoinGameRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'game_id' => ['required' , Rule::exists('joined_players' , 'game_id')],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
