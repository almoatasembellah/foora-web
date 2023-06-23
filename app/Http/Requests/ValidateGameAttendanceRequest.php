<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ValidateGameAttendanceRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'game_id' => ['required' , Rule::exists('games' , 'id')]
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
