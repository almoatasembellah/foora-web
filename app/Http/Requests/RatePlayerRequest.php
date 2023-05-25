<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RatePlayerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'pace' => ['required', 'numeric', 'min:0', 'max:100'],
            'shooting' => ['required', 'numeric', 'min:0', 'max:100'],
            'passing' => ['required', 'numeric', 'min:0', 'max:100'],
            'dribbling' => ['required', 'numeric', 'min:0', 'max:100'],
            'defending' => ['required', 'numeric', 'min:0', 'max:100'],
            'physical' => ['required', 'numeric', 'min:0', 'max:100'],
            'player_id' => ['required', 'numeric', Rule::exists('users', 'id')],
            'game_id' => ['required', 'numeric', Rule::exists('games', 'id')]
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
